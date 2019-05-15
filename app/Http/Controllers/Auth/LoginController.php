<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use App\Http\Requests\UserLogin;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Requests\UpdateProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    */
    
    public function login(Request $request){
        if(Sentinel::check()){
            if(Sentinel::getUser()->inRole('admin')){
                return redirect(route('dashboard'));
            }else{
                return redirect(route('profile'));
            }
        }
        $request->session()->put('backUrl', URL::previous());
        return view('login');
    }
    public function processLogin(UserLogin $request){
        try
        {
            $remember = (bool) $request->get('remember', false);

            if (Sentinel::authenticate($request->all(), $remember))
            {
                $backUrl = $request
                ->session()
                ->get('backUrl', route('dashboard'));
                $request->session()->forget('backUrl');
                return redirect($backUrl);
            }
            $errors = 'Tên đăng nhập hoặc mật khẩu không đúng.';
        }
        catch (NotActivatedException $e)
        {
            $errors = 'Tài khoản của bạn chưa được kích hoạt!';
        }
        catch (ThrottlingException $e)
        {
            $delay = $e->getDelay();
            $errors = "Tài khoản của bạn bị block trong vòng {$delay} giây.";
        }
        return redirect()->back()->withInput()->withErrors($errors);
    }
    public function logout(Request $request){
        $request->session()->forget('backUrl');
        Sentinel::logout();
        return redirect(route('home'));
    }
}

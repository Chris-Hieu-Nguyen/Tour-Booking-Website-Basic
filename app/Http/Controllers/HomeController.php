<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Models\Tour;
use App\Models\Destination;
use App\Models\Post;
use App\Models\Bill;
use App\Models\BillDetail;
use DB;
use Cart;
use App\Http\Requests\CartRequest;
class HomeController extends Controller
{
    //
    public function index(){
        $dataPost = Post::latest()
        ->limit(10)
        ->get();
        $dataTour = Tour::where('max_people','>','0')
        ->whereDate('end_day','>=',date('Y-m-d'))
        ->latest()
        ->limit(8)
        ->get();
        $dataTourSale = Tour::where([
            ['max_people','>','0'],
            ['sale','>','0']
        ])
        ->whereDate('end_day','>=',date('Y-m-d'))
        ->latest()
        ->limit(8)
        ->get();
        $dataDestination = Destination::inRandomOrder()->limit(8)->get();
        return view('client.layout.home',compact('dataPost','dataTour','dataTourSale','dataDestination'));
    }
    public function profile(){
        return view('client.layout.profile');
    }
    public function cart(){
        $dataCart = Cart::content();
        $destination = Destination::inRandomOrder()->limit(10)->get();
        return view('client.layout.cart',compact('dataCart','destination'));
    }
    public function store(Request $request,$id){
        $tour = Tour::find($id);
        $input= $request->all();
        if($input['adults']!=0){
            $price = ($tour->sale!=0) ? ($tour->price - ($tour->price*$tour->sale)/100)*$input['adults'] : $tour->price*$input['adults'] ;
            $price_child = $tour->price_child*$input['child'];
            $total = $price+$price_child;
            Cart::add([
                'id' => $id,
                'name' => $tour->translation('vi')->title,
                'qty' => 1, 'price' => $total,
                'options' => [
                        'songuoi' => $input['adults']+$input['child'],
                        'start' => $tour->start_day,
                        'end' => $tour->end_day,
                    ]
            ]);
            $tour->max_people = $tour->max_people - $input['adults']+$input['child'];
            $tour->save();
            return redirect(route('cart'));
        }else {
            return back()->with('err','Vui Lòng Chọn Số Lượng Người !');
        }
    }
    public function delete($id){
        if($id=='all'){
            Cart::destroy();
        }else{
            Cart::remove($id);
        }
        return back()->with('success','Deleted Successfuly !');
    }
    public function pay(CartRequest $request){
        DB::beginTransaction();
        try{
            $input = $request->all();
            $user = Sentinel::getUser()->id;
            $bill = new Bill;
            $cart['items'] = Cart::content();
            $bill->user_id = $user;
            $bill->email = $input['email'];
            $bill->phone = $input['phone'];
            $bill->total = Cart::total();
            $bill->save();
            foreach($cart['items'] as $item){
                $billdetail = new BillDetail;
                $billdetail->bill_id = $bill->id;
                $billdetail->tour_id = $item->id;
                $billdetail->people = $item->options->songuoi;
                $billdetail->price = $item->price;
                $billdetail->qty = $item->qty;
                $billdetail->save();
            }
            Cart::destroy();
        }catch(Exception $e){
            DB::rollBack();
            return back()
            ->withInput()
            ->with('err', $e->getMessage());
        }
        DB::commit();
        return redirect(route('done'))->with('success','Created Area successfully !');
    }
    public function done(){
        return view('client.layout.success');
    }
}

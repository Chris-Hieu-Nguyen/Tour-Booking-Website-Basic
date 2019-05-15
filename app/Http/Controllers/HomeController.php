<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
class HomeController extends Controller
{
    //
    public function index(){
        return view('client.layout.home');
    }
    public function profile(){
        return view('client.layout.profile');
    }
}

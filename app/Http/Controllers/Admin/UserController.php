<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $dataUser = User::all();
        return view('admin.user.index',compact('dataUser'));
    }
}

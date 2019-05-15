<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
class TourController extends Controller
{
    //
    public function index(){
        $data = Tour::all();
        return view('admin.tour.index',compact('data'));
    }
    public function create()
    {
       return view('admin.tour.create');
    }
}

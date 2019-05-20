<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;

class AreaController extends Controller
{
    //
    public function index(){
        $dataArea = Area::all();
        return view('admin.area.index',compact('dataArea'));
    }
    public function create(){
        $category = Category::all();
        return view('admin.area.create',compact('category'));
    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}

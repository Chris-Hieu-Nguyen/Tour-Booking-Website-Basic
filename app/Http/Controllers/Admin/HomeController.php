<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Models\Post;
use App\Models\Area;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Tour;

class HomeController extends Controller
{
    //
    public function index(){
        $countData = [
            'countArea' => count(Area::all()),
            'countDestination' => count(Destination::all()),
            'countCategory' => count(Category::all()),
            'countTour' => count(Tour::all()),
        ];
        return view('admin.layout.dashboard',compact('countData'));
    }
}

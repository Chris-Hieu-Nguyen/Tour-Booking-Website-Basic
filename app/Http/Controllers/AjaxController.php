<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
class AjaxController extends Controller
{
    //
    public function sortTour($type){
            if($type=='higher'){
                $dataTour = Tour::where('max_people','>','0')
                    ->whereDate('end_day','>=',date('Y-m-d'))
                    ->orderBy('price', 'desc')
                    ->get();
                    return response($dataTour);;
            }elseif ($type=='lower') {
                $dataTour = Tour::where('max_people','>','0')
                ->whereDate('end_day','>=',date('Y-m-d'))
                ->orderBy('price', 'asc')
                ->get();
                return  response($dataTour);
            }
    }
}

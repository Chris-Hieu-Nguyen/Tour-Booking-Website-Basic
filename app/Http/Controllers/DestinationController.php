<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Area;
use App\Models\Tour;
class DestinationController extends Controller
{
    public function list($slug,$id)
    {
        $dataDestination = Destination::where('area_id','=',$id)->paginate(6);
        $dataArea = Area::where([
            ['status','=',1],
            ['category_id','=',Area::find($id)->category_id],
            ['id','!=',$id],
        ])->get();
        return view('client.destination.list',compact('dataDestination','dataArea'));
    }
}


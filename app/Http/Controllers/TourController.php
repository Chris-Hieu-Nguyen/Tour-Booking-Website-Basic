<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Destination;
use DB;
use  App\Models\Comment;
class TourController extends Controller
{
    //
    public function index(Request $request){
        $input = $request->all();
        if(count($input)>0){
            $dataTour = Tour::where([
                ['max_people','>','0'],
                ['destination_id','=',$input['destination']]
            ])
            ->whereBetween(DB::raw('DATE(end_day)'), array(date("Y-m-d", strtotime($input['from'])), date("Y-m-d", strtotime($input['to']))))
            ->paginate(12);
            $destination = Destination::inRandomOrder()->limit(10)->get();
            return view('client.tour.index',compact('dataTour','destination','input'));
        }else{
            $dataTour = Tour::where('max_people','>','0')
            ->whereDate('end_day','>=',date('Y-m-d'))->paginate(12);
            $destination = Destination::inRandomOrder()->limit(10)->get();
            return view('client.tour.index',compact('dataTour','destination'));
        }
    }
    public function tour($slug,$id){
        $dataTour = Tour::where('destination_id','=',$id)->paginate(12);
        $des = Destination::find($id);
        $relatedDestination = Destination::where([
            ['id','!=',$des->id],
            ['area_id','=',$des->area_id]
        ])
        ->limit(10)
        ->get();
        return view('client.tour.destination',compact('dataTour','relatedDestination','des'));
    }
    public function detail($slug,$id){
        $tour = Tour::find($id);
        $relatedTour = Tour::where([
            ['id','!=',$tour->id],
            ['destination_id','=',$tour->destination_id],
            ['max_people','>','0']
        ])
        ->whereDate('end_day','>=',date('Y-m-d'))
        ->inRandomOrder()
        ->limit(4)
        ->get();
        $dataComment  = Comment::where('tour_id','=',$id)->get();
        return view('client.tour.detail',compact('tour','relatedTour','dataComment'));
    }
}

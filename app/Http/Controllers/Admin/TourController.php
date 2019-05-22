<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Destination;
use App\Models\TourTranslation;
use App\Http\Requests\Tour\CreateRequest;
use DB;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
class TourController extends Controller
{
    //
    public function index(){
        $dataTour = Tour::all();
        return view('admin.tour.index',compact('dataTour'));
    }
    public function create()
    {
        $destinations = Destination::all();
        return view('admin.tour.create',compact('destinations'));
    }
    public function store(CreateRequest $request){
        DB::beginTransaction();
        try{
            $user = Sentinel::getUser();
            $input = $request->all();
            $tour = new Tour;
            $tour->avatar = $input['avatar']?$input['avatar']:'';
            $tour->user_id = $user->id;
            $tour->destination_id = $input['destination_id'];
            $tour->max_people = $input['max_people'];
            $tour->slug = str_slug($input['title']['vi']);
            $tour->price = $input['price']?$input['price']:0;
            $tour->price_child = $input['price_child']?$input['price_child']:0;
            $tour->start_day = date("Y-m-d", strtotime($input['start_day']));
            $tour->end_day = date("Y-m-d", strtotime($input['end_day']));
            $tour->save();
            
            $locales = config('app.locales');
            foreach ($locales as $l=>$val){
                $tour_translation = new TourTranslation();
                $tour_translation->tour_id= $tour->id;
                $tour_translation->lang = $l;
                $tour_translation->title = $input['title'][$l]?$input['title'][$l]:'';
                $tour_translation->brief = $input['brief'][$l]?$input['brief'][$l]:'';
                $tour_translation->description = $input['content'][$l]?$input['content'][$l]:'';
                $tour_translation->save();
            }
        }catch(Exception $e){
            DB::rollBack();
            return back()
            ->withInput()
            ->with('err', $e->getMessage());
        }
        DB::commit();
        return redirect(route('tour.list'))->with('success','Created Area successfully !');
    }
    public function edit($id){

    }
    public function update(){

    }
    public function delete(){
        
    }
}

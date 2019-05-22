<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Destination;
use App\Models\DestinationTranslation;
use App\Http\Requests\Destination\CreateRequest;
use App\Http\Requests\Destination\UpdateRequest;
use DB;
class DestinationController extends Controller
{
    public function index(){
        $dataDestination = Destination::all();
        return view('admin.destination.index',compact('dataDestination'));
    }
    public function create(){
        $area = Area::all();
        return view('admin.destination.create',compact('area'));
    }
    public function store(CreateRequest $request){
        DB::beginTransaction();
        try {
            $input = $request->all();
            $destination = new Destination;
            $destination->slug = str_slug($input['title']['vi']);
            $destination->area_id = $input['area_id'];
            $destination->photo = $input['photo']?$input['photo']:'';
            $destination->save();
            $locales = config('app.locales');
            foreach ($locales as $l=>$val){
                $destination_trans = new DestinationTranslation();
                $destination_trans->destination_id = $destination->id;
                $destination_trans->lang = $l;
                $destination_trans->name = $input['title'][$l]?$input['title'][$l]:'';
                $destination_trans->save();
            }
        }catch(Exception $e){
            DB::rollBack();
            return back()
            ->withInput()
            ->with('err', $e->getMessage());
        }
        DB::commit();
        return redirect(route('destination.list'))->with('success','Created Area successfully !');

    }
    public function edit($id){
        $area = Area::all();
        $destination = Destination::find($id);
        $destination_trans = $destination->destination_translation;
        return view('admin.destination.edit',compact('area','destination','destination_trans'));
    }
    public function update(UpdateRequest $request,$id){
        $input = $request->all();
        $destination = Destination::find($id);
        $destination->slug = str_slug($input['title']['vi']);
        $destination->area_id = $input['area_id'];
        $destination->photo = $input['photo']?$input['photo']:$destination->photo;
        $destination->save();
        $locales = config('app.locales');
        foreach ($locales as $l=>$val){
            $destination_trans = $destination->translation($l);
            $destination_trans->name = $input['title'][$l]?$input['title'][$l]:'';
            $destination_trans->save();
        }
        return redirect(route('destination.list'))->with('success','Edited Area successfully !');
    }
    public function delete(){

    }
}

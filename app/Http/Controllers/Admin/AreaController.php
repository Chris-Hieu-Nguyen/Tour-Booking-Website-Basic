<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\AreaTranslation;
use App\Models\Category;
use App\Http\Requests\Area\CreateRequest;
use App\Http\Requests\Area\UpdateRequest;
use DB;
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
    public function store(CreateRequest $request){
        DB::beginTransaction();
        try {
            $input = $request->all();
            $area = new Area;
            $area->slug = str_slug($input['title']['vi']);
            $area->category_id = $input['category_id'];
            $area->photo = $input['photo']?$input['photo']:'';
            $area->save();
            $locales = config('app.locales');
            foreach ($locales as $l=>$val){
                $area_trans = new AreaTranslation();
                $area_trans->area_id = $area->id;
                $area_trans->lang = $l;
                $area_trans->name = $input['title'][$l]?$input['title'][$l]:'';
                $area_trans->save();
            }
        }catch(Exception $e){
            DB::rollBack();
            return back()
            ->withInput()
            ->with('err', $e->getMessage());
        }
        DB::commit();
        return redirect(route('area.list'))->with('success','Created Area successfully !');

    }
    public function edit($id){
        $category = Category::all();
        $area = Area::find($id);
        $area_trans = $area->area_translation;
        return view('admin.area.edit',compact('category','area','area_trans'));
    }
    public function update(UpdateRequest $request,$id){
        $input = $request->all();
        $area = Area::find($id);
        $area->slug = str_slug($input['title']['vi']);
        $area->category_id = $input['category_id'];
        $area->photo = $input['photo']?$input['photo']:'';
        $area->status = $input['status'];
        $area->save();
        $locales = config('app.locales');
        foreach ($locales as $l=>$val){
            $area_trans = $area->translation($l);
            $area_trans->name = $input['title'][$l]?$input['title'][$l]:'';
            $area_trans->save();
        }
        return redirect(route('area.list'))
        ->with('success', 'Edited successfully!');
    }
    public function delete(){

    }
}

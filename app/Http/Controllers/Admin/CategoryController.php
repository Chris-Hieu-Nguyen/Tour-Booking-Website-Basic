<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Category\CreateRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Area;
use App\Models\Destination;
use DB;

class CategoryController extends Controller
{
    //
    public function index() {
        $dataCategory = Category::all();
        return view('admin.category.index',compact('dataCategory'));
    }
    public function create(){
        return view ('admin.category.create');
    }
    public function store(CreateRequest $request){
        DB::beginTransaction();
        try{
            $input = $request->all();
            $category = new Category;
            $slug = str_slug($input['title']['vi']);
            $category->slug = $slug;
            $category->save();
            $locales = config('app.locales');
            foreach ($locales as $l=>$val){
                $category_trans = new CategoryTranslation();
                $category_trans->category_id = $category->id;
                $category_trans->lang = $l;
                $category_trans->name = $input['title'][$l]?$input['title'][$l]:'';
                $category_trans->save();
            }
        }catch(Exception $e){
            DB::rollBack();
            return back()
            ->withInput()
            ->with('err', $e->getMessage());
        }
        DB::commit();
        return redirect(route('category.list'))
        ->with('success', 'Created successfully!');
    }
    public function edit($id){
        $cate = Category::find($id);
        $cate_trans = $cate->category_trans;
        return view('admin.category.edit',compact('cate_trans'));
    }
    public function delete(Request $request)
    {
        $input = $request->all();
        $cate = Category::find($input['id']);
    }
}

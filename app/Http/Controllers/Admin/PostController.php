<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Requests\Post\CreateRequest;
use App\Http\Requests\Post\UpdateRequest;
use DB;
class PostController extends Controller
{
    public function index(){
        $dataPost = Post::all();
        return view('admin.post.index',compact('dataPost'));
    }
    public function create(){
        return view('admin.post.create');
    }
    public function store(CreateRequest $request){
        DB::beginTransaction();
        try {
            $input = $request->all();
            $input['photo'] = $input['photo']?$input['photo']:'';
            $input['slug'] = str_slug($input['title']);
            $input['author'] = Sentinel::getUser()->id;
            $post = Post::create($input);
        } catch(Exception $e){
            DB::rollBack();
            return back()
            ->withInput()
            ->with('err', $e->getMessage());
        }
        DB::commit();
        return redirect(route('post.list'))
        ->with('success', 'Created successfully!');
    }
    public function edit($id){
        $post = Post::find($id);
        return view('admin.post.edit',compact('post'));
    }
    public function update(UpdateRequest $request,$id){
        $input = $request->all();
        $post = Post::find($id);
        $post->title = $input['title'];
        $post->brief = $input['brief'];
        $post->content = $input['content'];
        $post->photo = $input['photo']?$input['photo']: $post->photo;
        $post->save();
        return redirect(route('post.list'))->with('success','Edited Area successfully !');
    }
    public function delete(Request $request){
        $id = $request->all()['id'];
        $post = Post::find($id)->delete();
        return redirect(route('post.list'))->with('success','Deleted Post successfully !');
    }

}

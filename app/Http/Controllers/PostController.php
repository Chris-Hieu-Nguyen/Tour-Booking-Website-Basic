<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class PostController extends Controller
{
    //
    public function index()
    {
        $dataPost = Post::paginate(12);
        return view('client.post.index',compact('dataPost'));
    }
    public function detail($slug,$id){
        $post = Post::find($id);
        $dataPost = Post::inRandomOrder()->limit(5)->get();
        $dataComment  = Comment::where('post_id','=',$id)->get();
        return view('client.post.detail',compact('post','dataPost','dataComment'));
    }
}

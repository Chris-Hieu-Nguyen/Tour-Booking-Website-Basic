<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
class CommentController extends Controller
{
    //
    public function post(CommentRequest $request,$id){
        $comment = new Comment();
        $comment->post_id = $id;
        $comment->content = $request->all()['message'];
        $comment->user_id = Sentinel::getUser()->id;
        $comment->save();
        return back();
    }
    public function tour(CommentRequest $request,$id){
        $comment = new Comment();
        $comment->tour_id = $id;
        $comment->content = $request->all()['message'];
        $comment->user_id = Sentinel::getUser()->id;
        $comment->save();
        return back();
    }
}

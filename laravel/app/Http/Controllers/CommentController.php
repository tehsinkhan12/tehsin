<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Comment;
use Session;




class CommentController extends Controller
{
    public function index(Request $request){
    	

       /* $this->validate($request,[
    		'post_id' => 'exists:posts,id|numeric',
    		'comment' =>'required|max:255'
    		]);*/
    	$comment = new Comment();
    	$comment->comment = $request->comment;
    	$comment->user_id = $request->user_id;
    	$comment->post_id = $request->post_id;
    	$comment->save();

    	
    	return $comment;

    }
function delete($comments_id)
{
    Comment::where('id',$comments_id)->delete();
    return back();
}
   

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Post;
use Illuminate\Support\Facades\Auth;
use App\User;

class PostController extends Controller
{
    

    /*public function index(){
   
    $posts = Post::all();
    return view('posts.index',compact('posts'));
 
    }
   

    public function show($id){

    	$posts = Post::find($id);
    return view('posts.show',compact('post'));
    	
    }*/

    public function getDashboard(){
      	
      	$posts = Post::all();
      	
        return $posts;
        //return ["user_id" => "1", "message" => "test"];
     

      }




    public function postCreatePost(Request $request){

       /*$this->validate($request, [
         	'body' =>'required|max:1000'
         	]);*/
    // dd(Auth::user());
    	$post = new Post();
    	$post->body = $request['body'];
      $post->user_id = $request['user_id'];
    	//$request->user()->posts()->save($post);
    	$message = 'There was error';
     // echo $request['body'];
     // echo $request['user_id'];
     // echo $posts->user_id;
      


    	if ($post->user()->associate(Auth::user())){
     //   
    	$message = 'post succesfully created';
        $post->save();
        return $post;

     }
     

    	//return redirect()->route('dashboard')->with(['message' => $message]);
    }

   /* public function getDeletePost($post_id){
    	$post = Post::where('id', $post_id)->first();
    	$post->delete();
    	return redirect()->route('dashboard')->with(['message' => 'Succesfully Deleted']);
    }*/

     public function getDeletePost($post_id){
    	 Post::where('id', $post_id)->delete();
      return ['status' => 'true', 'message' => " post succes fully deleted"];
    	
    	//return redirect('api/dashboard')->with(['message' => 'Succesfully Deleted']);
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class LoginController extends Controller
{
    //
     public function create()
    {
       // return view('login.create');
    }
     public function login(Request $req){
   
    $email = $req->input('email');
    $password = $req->input('password');

    $checkLogin = DB::table('registrations')->select('id','email')->where(['email'=>$email, 'password'=>$password])->first();
    

  if(count($checkLogin) >0){
       // echo "Login succesFull";
         return ['status' => 'true', 'message' => "user succesfuuly logined",'user_id' => $checkLogin->id];
    
  }
  
       // return redirect()->back();
return ['status' => 'false', 'message' => "invalid login or password"];

   }
    }


<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;


class UserController extends Controller
{
     
      
    public function postSignUp(Request $request){

        $this->validate($request, [
        	'firstname' =>'required',
        	'lastname' =>'required',
        	'email' =>'required|email|unique:users',
        	'password' =>'required|min:4']);

        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $email = $request['email'];
    	$password = $request['password'];

    	$user = new User();
    	$user->firstname = $firstname;
    	$user->lastname = $lastname;
    	$user->email = $email;
    	$user->password = $password;

    	$user->save();
    	Auth::login($user);
    	return redirect()->route('dashboard');

    }

    public function postSignIn(Request $request){
    	
    	$this->validate($request, [
        	
        	
        	'email' =>'required',
        	'password' =>'required']);




    	if (Auth::user(['email' => $request['email'], 'password' => $request['password']]));
    	{
    		return redirect()->route('dashboard');
    	}
    	return redirect()->back();
    	
    }

   

}


    	 //public function create()
    //{
        //return view('login.create');
   // }
   //  public function login(Request $req){
    /*$email = $request->input('email');
    $password = $request->input('password');

    $checkLogin = DB::table('users')->where(['email'=>$email, 'password'=>$password])->get();
    if(count($checkLogin) >0){
        echo "Login succesFull";
        //return redirect()->route('dashboard');
    }
    else{
        echo "Login Faild Email and password does not match";
    }
    
        

  }*/


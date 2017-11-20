<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Requests\formvalidation;
use App\Registration;
use Illuminate\Support\Facades\Input;

class RegistrationController extends Controller
{
    //

       public function create()
    {
       //return view('registration.create');

    }

     public function store(formvalidation $request)
  
      
       {

      /*  $this->validate($request, [
          'firstname' =>'required',
          'lastname' =>'required',
          'email' =>'required|email|max:255|unique:registrations',
          'password' =>'required',
          ]);*/





        
      try{
          Registration::create(Request::all());
        
   return ['status' => 'true', 'message' => "user succesfuuly registered"];
    
      }
      catch(Exception $e)
      {

       
   return ['status' => 'false', 'message' => $e->getMessage()];
    
      }

        }

  





/*try{
	$user = new Registration;
     $user->firstname = Input::get("firstname");
     $user->lastname = Input::get("lastname");
     $user->email = Input::get("email");
     $user->password = Input::get("password");
     $user->save();

     return("data saved in database");

}
catch(Exception $e){
	echo $e->getMessage();
	exit;
}

     $user = new Registration();
     $user->firstname = Input::get("firstname");
     $user->lastname = Input::get("lastname");
     $user->email = Input::get("email");
     $user->password = Input::get("password");
     $user->save();
     if($user){
     	return responce("this user already exist");*/
     
     //return("data saved in database");


       /* $this->validate(request(), [
            'firstname' => 'required','lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
           $user= new User();
        $user->firstname= $request['first name'];
        $user->lastname= $request['last name'];
        $user->email= $request['email'];
        $user->password= $request['password'];
    // add other fields
    $user->save();*/
    
        
        //$user = Registration::create(request(['firstname','lastname', 'email', 'password']));
        
       // auth()->login($user);
        
       // return redirect()->to('/');
    }



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class SessionsController extends Controller
{
    
   



     public function create()
    {
        return view('login.create');
    }

    
    
    public function store()
    {
      //  if (auth()->attempt(request(['email', 'password'])) == false) {
         //   return back()->withErrors([
              //  'message' => 'The email or password is incorrect, please try again'
          //  ]);
        }
        
        return redirect()->to('/home');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('login');
    }
}


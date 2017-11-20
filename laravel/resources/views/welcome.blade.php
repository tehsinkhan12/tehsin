@extends('layouts.master')

@section('title')
Welcome:
@endsection

@section('content')
@include('includes.message-block')
  
  <div class="row">
  <div class="col-md-6">
  <h3>Sign Up</h3>
  <div class="login-content">
<form class="loginForm" method="post" action="{{route('signup')}}">
<div class="input-field">
  <label>First Name</label>
  <input type="text" name="firstname" id="firstname">
  </div>
<div class="input-field">
  <label>Last Name</label>
  <input type="text" name="lastname" id="lastname">
  </div>
<div class="input-field">
  <label>Email</label>
  <input type="email" name="email" id="email">
  </div>
 <div class="input-field">
  <label>Password</label>
  <input type="password" name="password" id="password">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div>
  <button type="submit" id="submit">Submit</button>

  </div>
</form>
</div>
</div>
</div>


<div class="row">
  <div class="col-md-6">
  <h3>Sign In</h3>
  <div class="login-content">
<form class="loginForm" method="post" action="{{ route('signin') }}">


<div class="input-field">
  <label>Email</label>
  <input type="email" name="email" id="email">
  </div>
 <div class="input-field">
  <label>Password</label>
  <input type="password" name="password" id="password">
  </div>
  
  <div>
  <button type="submit" id="submit">Submit</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  </div>
</form>
</div>
      


  </div>
      

  </div>

@endsection
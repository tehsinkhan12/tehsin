@include('header')
@include('index')




<html>

<body>

<div class="Login-content">
<form class="loginForm" method="get" action="login">
<h2>Login Form</h2>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="inputBox">
  <label>Email</label>
  <input type="email" name="email" id="email">
  </div>
 <div class="inputBox">
  <label>Password</label>
  <input type="password" name="password" id="password">
  </div>
  <button type="submit" name="login">Login</button>
  
 <p>If you have no account <a href="register">Register</a> yourself</p>
</form>

</div>

</body>
</html>

@include('footer')
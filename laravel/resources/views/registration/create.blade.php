
@include('header')
 @include('index')
  


<?php 

/*if($errors->any()){
    foreach($errors->all() as $error){
 
echo $error;
}
}*/

?>
  <!DOCTYPE html>
<html>
<head>
    
    
   
    
</head>
<body>

<div class="Login-content">
<form class="loginForm" method="POST" action="store">
<h2>Registrartion form</h2>
<div class="inputBox">
  <label>First Name:</label>
  <input type="text" name="firstname" id="firstname" required>
  </div>
<div class="inputBox">
  <label>Last Name:</label>
  <input type="text" name="lastname" id="lastname" required>
  </div>
<div class="inputBox">
  <label>Email:</label>
  <input type="email" name="email" id="email" required>
  </div>
 <div class="inputBox">
  <label>Password:</label>
  <input type="password" name="password" id="password" required="pass">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div>
  <button id="submit">Submit</button>

  </div>
</form>
</div>

</body>
</html>


 



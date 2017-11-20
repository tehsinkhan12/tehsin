<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
	<title>documents</title>
</head>
<body>
  <ul>
  <?php 
      foreach($posts as $post){
      echo "<li><a href='post/$post->id'>".$post->title."></a></li>";
      }

   ?>
 </ul>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
	<title>status</title>
</head>
<body>
<div class="container">
<h1>My status</h1>

<hr>

<form action="{{'/comment'}}" method="POST">
   {{csrf_field()}}

   <div class="form-group">
   <label for="comment">Write comment</label>
   <input class="form-control" name="comment" placeholder="Write comment" type="text">
   	
   </div>
   <input class="btn btn-primary" type="submit" value="Done">
	

</form>

<h5> List of Comments</h5>

@forelse($comments as $comment)

<p>{{($comment as $comment)}}</p>

@empty

<h4>No comments</h4>

@endforelse
</div>

</body>
</html>
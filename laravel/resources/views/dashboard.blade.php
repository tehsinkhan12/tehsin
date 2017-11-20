

@include('header')
@include('index')
@extends('layouts.master')



<div class="container">

<div class="Home-heading">

<h1>Post </h1>
</div>
<div class="row">
<div class="col-md-6 Homeregion">
<div class="Posts-area">
<form action="{{ route('post.create') }}" method="post">
<div class="form-group">
<textarea class="form-control" name="body" id="new-post" rows="5" placeholder="your post"></textarea>
	
</div>
<button type="submit" class="">Create Post</button>
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	
</form>
</div>
	
</div>


<div class="row posts"> 
<div class="col-md-6 ">
<h3>What the other Post are..</h3>
@foreach($posts as $post)

<div class="post">
<p>{{ $post->body }}</p>
<div class="info">
  posted by {{$post->firstname}}  on {{ $post->created_at}}
	</div>
	<div class="interaction">
	
	<a href="{{ ("/delete/{$post->id}")}}">Delete</a>
		

		@foreach ($post->comments as $comment)
		<div class="pannel defult">
			<div class="pannel-body">
			{{ $comment->comment}}	
			</div>
		</div>
	@endforeach

	<div class="comment-area">
	<form method="POST" action="{{ url('/comment') }}">
	  {{ csrf_field() }}
	  <input type="hidden" name="post_id" value="{{ $post->id }}">
	  <div>
<a href="{{ url("/delete/{$comment->id}")}}">Delete</a>
</div>
<div class="form-group">
  <input type="text" name="comment" placeholder="Your comment here.." />
  
 </div>
	  <button type="submit">Add Comment</button>


	 </form>
  
  

  
     </div>
    
 
  
	
	</div>
	
</div>

@endforeach


	
</div>

	

</div>




</div>
<div>


</div>
</div>

@include('footer')
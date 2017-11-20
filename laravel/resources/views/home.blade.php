@include('header')
@extends('layouts.master')

@section('content')

<div className="content">
      <div className="Home-heading">
      <h1> Posts</h1>
      </div>
          <div className="row">
        <div className="col-md-6 Homeregion">
         <div className="Posts-area">
         <form>
           <div className="form-group">
<textarea className="form-control" name="body" id="new-post" rows="4" placeholder="your post"></textarea>
    
</div>
<button type="submit">Create Post</button>
          
        </form>
         </div>
         <div className="comment-area">
         <form>
    <div className="form-group">
  <input type="text" placeholder="Your comment here.." />
  
 </div>
  
   <button type="submit">Add Comment</button>

</form>
</div>
        </div>
       </div>
       </div>


       
@endsection
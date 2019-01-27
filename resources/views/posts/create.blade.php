@extends('layouts.app')

@section('content')

<div class="container">
        
    <form  method="post" action="{{route('posts.store')}}">
          <label for="fname">Title</label>
          <input type="text" id="fname" name="title" placeholder="Your Title..">
      
          <label for="lname">Body</label>
          <input type="text" id="lname" name="body" placeholder="Your Body..">
      
          <label for="">Category</label>
          <select id="category" name="category">
          @foreach ( $cat as $category )

                    <option value="{{$category->category_id}}">{{$category->categoryname}}</option>
                  
            @endforeach
        </select>
          <input type="submit" value="Submit">
                
        </form>
      </div>
    
      
@endsection
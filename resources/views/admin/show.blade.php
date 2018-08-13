@extends('layouts.admin-app')

@include('inc.navbar')
@section('content')



<div class="container">
       
    <a href="/admin" class="btn btn-default">go back</a>
    
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
<br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written On {{$post->created_at}} By {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
  @if (Auth::user()->id == $post->user_id)
      
  
<a href="/admin/{{$post->id}}/edit" class="btn btn-default">Edit</a>


    

{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method' => 'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}

{{Form::submit('Delete',['class'=> 'btn btn-default'])}}
{!!Form::close()!!}
@endif
@endif

</div>




@endsection
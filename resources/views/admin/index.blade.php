@extends('layouts.admin-app')

@include('inc.navbar')
@section('content')

<div class="container">
{{-- <div class="jumbotron text-center"> --}}
{{-- <h2>Wllcome To Vvisheshta - Admmin Panel</h2>
<p>This is a application from Qcom Software Solution's</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p> --}}

    <h1>Posts</h1>
   
    @if(count($posts) >1)
        @foreach($posts as $post)
            <div class="well">
                    <div class="row">
                            <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                            </div>
                    
                            <div class="col-md-8 col-sm-8">
                                    <h3><a href="/admin/{{$post->id}}">{{$post->title}}</a></h3>
                                    <small>Written On {{$post->created_at}} By {{$post->user->name}}</small>
                                </div>
                        </div>
           
            </div>
        @endforeach
    @else
            <p>No Posts Found</p>

    @endif

{{-- </div> --}}
</div>




@endsection
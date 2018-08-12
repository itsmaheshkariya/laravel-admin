@extends('layouts.admin-app')


@section('content')

@include('inc.navbar')
<div class="container">
<div class="jumbotron text-center">
<h2>Wllcome To Vvisheshta - Admmin Panel</h2>
<p>This is a application from Qcom Software Solution's</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
</div>




@endsection
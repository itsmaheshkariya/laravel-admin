<html>
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>
<body>
    <div class="container" style="margin-top:60px">
        @include('inc.messages')
    </div>
@yield('content')
<script src="{{asset('js/app.js')}}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
</body>

</html>
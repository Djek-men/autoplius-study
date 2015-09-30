<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Autoplius.by</title>
    <meta name='description' content='auto'>
    <meta name='keywords' content='auto'>
    <link href='{{asset("media/bootstrap/css/bootstrap.min.css")}}' rel="stylesheet" type="text/css">
    <link href='{{asset("media/css/style.css")}}' rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
    <div class="col-lg-12">
        @include('templates.top_banner')
    </div>

    <div class="col-lg-8">
        @include('templates.header_menu')
        <div id="content">
            @yield('content')
        </div>
    </div>

    <div class="col-lg-4">
        @include('templates.right_banners')
    </div>


    <div class="col-lg-8">
            @include('templates.footer')
    </div>
</div>
</body>
</html>
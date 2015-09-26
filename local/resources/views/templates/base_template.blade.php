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


            @include('templates.top_banner')


            @include('templates.header_menu')


            @include('templates.right_banners')


            <!--Begin content-->

            <div id="content" class='col-md-8' style="padding-left: 0px; padding-right: 0px">

            @yield('content')

            </div>

            <!---End content-->


            @include('templates.footer')


        </div>


</body>
</html>
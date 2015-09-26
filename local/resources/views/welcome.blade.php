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


        <div id="banner" class="border">

        </div>
        <div id="header-small" class="border col-md-8">
            <div>

                <div id="header-top" class="header-line">
                    <a href="#" class="logo"><img src="media/img/logo.gif" /></a>
                    <span class="portal">Портал транспортных объявлений</span>

                    <div class="btn-group fr">
                        <button class="btn">Logo 1</button>
                        <button class="btn">Logo 2</button>
                    </div>
                </div>

                <div class="clear"></div>

                <nav>

                    <div id="header-middle" class="header-line divBlue">

                        <div class="btn-group">
                            <button class="btn  btn-small"><strong>Б/У Авто</strong></button>
                            <button class="btn  btn-small"><strong>Новые авто</strong></button>
                        </div>


                        <div class="btn-group fr">
                            <button class="btn  btn-small"><strong>Войти</strong></button>
                            <button class="btn  btn-small"><strong>Зарегистрироваться</strong></button>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div id="header-bottom" class="header-line">
                        <div class="btn-group">
                            <button class="btn btn-small"><strong>Детальный поиск</strong></button>
                            <button class="btn btn-small"><strong>Мой поиск</strong></button>
                            <button class="btn btn-small"><strong>Мои заметки</strong></button>
                        </div>
                    </div>
                </nav>

            </div>
        </div>




    <div id="banners" class="banners col-md-4 border">
        <div id="right-banner1" class="border  right-banner">
        </div>

        <div id="right-banner2" class="border  right-banner">
        </div>

        <div id="right-banner3" class="border  right-banner">
        </div>
    </div>


    <div id="content" class='border col-md-8'>
        @yield('content')
        сюда вставляем контент
    </div>



    <div id='footer' class="border col-md-8">
    </div>



</div>



</body>
</html>
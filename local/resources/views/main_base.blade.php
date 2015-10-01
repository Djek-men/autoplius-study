@include('templates.header')

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
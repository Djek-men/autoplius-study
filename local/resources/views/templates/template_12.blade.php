
@include ('templates.header')

<div class="container">
    <div class="col-lg-12">
        @include('templates.header_menu')

        <div id="content">
            @yield('content')
            
        </div>

        @include('templates.footer')
    </div>
</div>


</body></html>
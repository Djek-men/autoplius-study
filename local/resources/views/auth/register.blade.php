@include('templates.header')
<div class="container">
    <div class="col-lg-12">
        @include('templates.header_menu')

        <div id="content">
            <div style="margin: 0 auto; width: 300px; padding-top: 30px">
            <form method="POST" action="register">
                {!!csrf_field()!!}
                <div class="form-group">
                    <label for="name">Ваше имя</label>
                    <input type="name" class="form-control" id="name" placeholder="name" name="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email-адрес</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Введите пароль</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="password2">Повторите пароль</label>
                    <input type="password" class="form-control" id="password2" placeholder="Password" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-default">Регистрация</button>
            </form>
            </div>
        </div>

        @include('templates.footer')
    </div>
</div>


</body></html>
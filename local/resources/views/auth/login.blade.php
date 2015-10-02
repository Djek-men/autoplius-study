@include('templates.header')
<div class="container">
    <div class="col-lg-12">
        @include('templates.header_menu')

        <div id="content">
            <div style="margin: 0 auto; width: 300px; padding-top: 30px">
                <form method="POST" action="login">
                    {!!csrf_field()!!}
                    <div class="form-group">
                        <label for="email">Email-адрес</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Запомнить
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Войти</button>
                </form>
                @foreach($errors->all() as $error)
                    <div class="has-error">{{$error}}</div>
                @endforeach
            </div>
        </div>

        @include('templates.footer')
    </div>
</div>


</body></html>
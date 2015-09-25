@extands('welcome')

@section('content')
    <h2>Поиск Автомобиля</h2>
    {{Form::open(array('url' => action('FormController@usedAuto'),'method'=>'post'))}}

    @include('form/form-usedAuto')

    <div class="form-group">
        <div class="col-sm-2">&nbsp;</div>
        <div class="col-sm-5">
            <button type="submit" class="btn btn-primary submit-button">Искать</button>
        </div>
    </div>
    {{Form::close()}}
@stop
@section('scripts')
@parent
<script src="{{asset('media/js/account.js')}}"></script>
@stop


@extends('templates.template_12')

@section('content')
    
	
  
  <div class="cabinet">
  @if (count($errors))
  <div>Сообщения об ошибках</div>
  @foreach($errors->all() as $one)
  <div class='errors'>
  {{$one}}
  </div>
  @endforeach  
  @endif
  
  
        <h3>Мои объявления</h3>
    @if(!empty($cars))
         <table class="table table-bordered">
            <thead>
                <td>Марка</td>
                <td>Модель</td>
                <td>Описание</td>
                <td>Цена</td>
				<td>Действие</td>
            </thead> 

    @foreach($cars as $item)
                <tr>
                    <td><?=$item->marke?></td>
                    <td><?=$item->model?></td>
                    <td style="width: 450px"><?=$item->description?></td>
                    <td><?=$item->price?></td>
					<td>
					<a class="btn btn-default" href="{{asset('cabinet/edit/'.$item->id)}}" role="button">Редактировать</a>
					
					<button class="btn btn-default" type="submit" onclick="position_delete('{{asset('cabinet/delete/'.$item->id)}}','Вы действительно хотите удалить?')">Удалить</button>
					</td>
                </tr>
    @endforeach
          </table>
    @else
    <p>У вас нет объявлений</p>
    @endif
    </div>
  
@stop
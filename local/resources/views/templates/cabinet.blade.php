@extends('templates.template_12')

@section('content')
    
	<div style="margin:0 auto; width:300px;padding-top:30px">
	<form enctype='multipart/form-data' method='post' action=''>
	{{csrf_field()}}
  <div class="form-group">
    <label for="name">Название</label>
    <input type="text" class="form-control"  name="name">
  </div>
  
  <div class="form-group">
    <label for="body">Описане</label>
    <textarea  class="form-control" name="body"></textarea>
  </div>
  
  <div class="form-group">
    <label for="cat_id">Категория</label>
    <input type="text" class="form-control"  name="cat_id">
  </div>
  
  <div class="form-group">
    <label for="picture">Изображение</label>
    <input type="file" class="form-control" name="picture">
  </div>
   
  <button type="submit" class="btn btn-default">Добавить</button>
  </form>
  @foreach($goods as $good)
  <li>{{$good->name}}</li>
  </div>
  @endforeach
  <p align
@stop
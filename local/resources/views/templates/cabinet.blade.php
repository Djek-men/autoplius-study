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
    <label for="description">Описане</label>
    <textarea  class="form-control" name="description"></textarea>
  </div>
  
  <div class="form-group">
    <label for="price">Цена</label>
    <input type="text" class="form-control"  name="price">
  </div>
  <div class="form-group">
    <label for="image">Изображение</label>
    <input type="file" class="form-control" name="image">
  </div>
   
  <button type="submit" class="btn btn-default">Добавить</button>
  </form>
  </div>
@stop
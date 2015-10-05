@extends('templates.template_12')

@section('content')



<div style="margin:0 auto; width:300px;padding-top:30px">
	<form enctype='multipart/form-data' method='post' action="{{asset('cabinet')}}">
	{{csrf_field()}}
  <div class="form-group">
    <label for="marke">Марка</label>
    <input type="text" class="form-control"  name="marke">
  </div>
  
  <div class="form-group">
    <label for="model">Модель</label>
    <input type="text" class="form-control"  name="model">
  </div>
  
  <div class="form-group">
    <label for="description">Описане</label>
    <textarea  class="form-control" name="description"></textarea>
  </div>
  
  <div class="form-group">
    <label for="price">Цена</label>
    <input type="text" class="form-control"  name="price">
  </div>
       
  <button type="submit" class="btn btn-default">Добавить</button>
  </form>
  
  @stop
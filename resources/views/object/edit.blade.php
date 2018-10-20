@extends('layouts.app')

@section('content')
   <h1 class="text-center">Редагувати об'єкт {{$ObjectFlorian->name}}</h1>
  <form class="mx-auto row bg-secondary p-3 rounded my-4" action="/object/update" method="post">
    <div class="form-group col-4">
      <label>Введіть назву об'єкту</label>
      <input type="text" name="name" placeholder="Введіть назву об'єкту" class="form-control" value="{{$ObjectFlorian->name}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть адресу об'єкту</label>
      <input type="text" name="adress" placeholder="Введіть адресу об'єкту" class="form-control" value="{{$ObjectFlorian->adress}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть район об'єкту</label>
      <input type="text" name="region" placeholder="Введіть район об'єкту" class="form-control" value="{{$ObjectFlorian->region}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть тип системи</label>
      <input type="text" name="type_system" placeholder="Введіть тип системи" class="form-control" value="{{$ObjectFlorian->type_system}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть назву пристрою</label>
      <input type="text" name="name_device" placeholder="Введіть назву пристрою" class="form-control" value="{{$ObjectFlorian->name_device}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть к-сть шлейфів</label>
      <input type="text" name="quanity_shleyf" placeholder="Введіть к-сть шлейфів" class="form-control" value="{{$ObjectFlorian->quanity_shleyf}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть к-сть виносних оповіщувачів</label>
      <input type="text" name="quanity_vinosn" placeholder="Введіть к-сть виносних оповіщувачів" class="form-control" value="{{$ObjectFlorian->quanity_vinosn}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть к-сть автоматичних оповіщувачів</label>
      <input type="text" name="quanity_automat" placeholder="Введіть к-сть автоматичних оповіщувачів" class="form-control" value="{{$ObjectFlorian->quanity_automat}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть к-сть ручних оповіщувачів</label>
      <input type="text" name="quanity_ruchnih" placeholder="Введіть к-сть ручних оповіщувачів" class="form-control" value="{{$ObjectFlorian->quanity_ruchnih}}">
    </div>
    <div class="form-group col-4 ">
    <label>Введіть тип системи АПГ</label>
      <input type="text" name="system_type" placeholder="Введіть тип системи АПГ" class="form-control" value="{{$ObjectFlorian->system_type}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть к-сть напрямків</label>
      <input type="text" name="quanity_napryamkiv" placeholder="Введіть к-сть напрямків" class="form-control" value="{{$ObjectFlorian->quanity_napryamkiv}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть к-сть модулів</label>
      <input type="text" name="quanity_module" placeholder="Введіть к-сть модулів" class="form-control" value="{{$ObjectFlorian->quanity_module}}">
    </div>
    <div class="form-group col-4">
    <label>Введіть відповідального за об'єкт</label>
      <input type="text" name="vidpovidalnuy" placeholder="Введіть відповідального за об'єкт" class="form-control" value="{{$ObjectFlorian->vidpovidalnuy}}">
    </div>
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$ObjectFlorian->id}}">
<hr>
<div class="form-group col-4">
      
      <button type="submit" name="submit" class="btn btn-success float-right" data-toggle="tooltip" data-placement="left" title="Зберегти"><i class="far fa-save"></i></button>
      <a href="/object/cancel" class="btn btn-warning float-right" data-toggle="tooltip" data-placement="left" title="Назад"><i class="fas fa-undo-alt"></i></a>
      <a href="/object/remove/{{$ObjectFlorian->id}}" class="btn btn-danger float-right" data-toggle="tooltip" data-placement="left" title="Видалити"><i class="fas fa-trash-alt"></i></a>

</div>
  </form>
@endsection

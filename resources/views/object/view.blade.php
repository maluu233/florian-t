@extends('layouts.app')

@section('content') 
   <h1 class="text-center">Перегляд об'єкту {{$ObjectFlorian->name}}</h1>
   <div class="card">
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAfog9ogzYEHhX16nGTjw6iiYKbDjlHgM&callback=initMap"
    async defer></script>
<form>
    <input type="text" name="address" id="address" value="Sydney, NSW">
    <input type="submit" value="Search" id="searchItem">
</form>
<div id="map-canvas" /></div>
<script>
var myLatlng = new google.maps.LatLng(31.272410, 0.190898);


// INITALIZATION
 function initialize() {
     var mapOptions = {
         zoom: 4,
         center: myLatlng,
         mapTypeId: google.maps.MapTypeId.ROADMAP
     }
     var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
 }


// GEOCODE
  function codeAddress() {
    var address = document.getElementById("address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        alert("Geocode was successful");
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      };
    });
  }


// GET ADDRESS DETAILS
 function getLatLongDetail() {
     geocoder = new google.maps.Geocoder();
     geocoder.geocode({
         'latLng': myLatlng
     },
     function (results, status) {
         if (status == google.maps.GeocoderStatus.OK) {
             if (results[0]) {
                 var address = "Зодчих 12",
                     city = "Винница",
                     state = "",
                     zip = "",
                     country = "Украина";
                 for (var i = 0; i < results[0].address_components.length; i++) {
                     var addr = results[0].address_components[i];
                     // check if this entry in address_components has a type of country
                     if (addr.types[0] == 'country') country = addr.long_name;
                     else if (addr.types[0] == 'street_address') // address 1
                     address = address + addr.long_name;
                     else if (addr.types[0] == 'establishment') address = address + addr.long_name;
                     else if (addr.types[0] == 'route') // address 2
                     address = address + addr.long_name;
                     else if (addr.types[0] == 'postal_code') // Zip
                     zip = addr.short_name;
                     else if (addr.types[0] == ['administrative_area_level_1']) // State
                     state = addr.long_name;
                     else if (addr.types[0] == ['locality']) // City
                     city = addr.long_name;
                 }
                 alert('City: ' + city + '\n' + 'State: ' + state + '\n' + 'Zip: ' + zip + '\n' + 'Country: ' + country);
             }
         }
     });
 }

 initialize();
 getLatLongDetail();
document.getElementById("searchItem").onclick = function() {
    codeAddress();
    return false;
};
</script>
   </div>
<br>
<div class="card">
<ul class="nav nav-tabs float-right" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Загальна інформація про об'єкт</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Інформація про АСПС</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Інформація про АСПГ</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
</div>



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
    <select name="vidpovidalnuy" required class="form-control">
    @foreach($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach  
   </select>
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

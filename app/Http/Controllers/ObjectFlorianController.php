<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ObjectFlorian;
use App\User;

class ObjectFlorianController extends Controller
{
    function create(Request $request) {

        $object = new ObjectFlorian();
        $object->name = $request->name;
        $object->adress = $request->adress;
        $object->region = $request->region;
        $object->type_system = $request->type_system;
        $object->name_device = $request->name_device;
        $object->quanity_shleyf = $request->quanity_shleyf;
        $object->quanity_vinosn = $request->quanity_vinosn;
        $object->quanity_automat = $request->quanity_automat;
        $object->quanity_ruchnih = $request->quanity_ruchnih;
        $object->system_type = $request->system_type;
        $object->quanity_napryamkiv = $request->quanity_napryamkiv;
        $object->quanity_module = $request->quanity_module;
        $object->vidpovidalnuy = $request->vidpovidalnuy;


        $object->save();
       
  
        return redirect('/');
      }
      function list() {
        $users = User::all();
        return view('object.add', [
          'users' => $users 

          ]);
          
      }
      public function show() {
        $objectFlorians = ObjectFlorian::all();
        $users = User::all();



        
          return view('home',[
            'objectFlorians' => $objectFlorians,
            'users' => $users 
          ]);
         
         
      }


      function edit($id) {
        $users = User::all();
        $ObjectFlorian = ObjectFlorian::find($id);
      return view('object.edit', [
        'ObjectFlorian' => $ObjectFlorian->first(),
        'users' => $users 
      ]);
    

      }
      function view($id) {
        $users = User::all();
        $ObjectFlorian = ObjectFlorian::find($id);
      return view('object.view', [
        'ObjectFlorian' => $ObjectFlorian->first(),
        'users' => $users 
      ]);
      }
      function update(Request $request) {
        $object = ObjectFlorian::find($request->id);
        $object->name = $request->name;
        $object->adress = $request->adress;
        $object->region = $request->region;
        $object->type_system = $request->type_system;
        $object->name_device = $request->name_device;
        $object->quanity_shleyf = $request->quanity_shleyf;
        $object->quanity_vinosn = $request->quanity_vinosn;
        $object->quanity_automat = $request->quanity_automat;
        $object->quanity_ruchnih = $request->quanity_ruchnih;
        $object->system_type = $request->system_type;
        $object->quanity_napryamkiv = $request->quanity_napryamkiv;
        $object->quanity_module = $request->quanity_module;
        $object->vidpovidalnuy = $request->vidpovidalnuy;
        //dd($ObjectFlorian);
        $object->save();
        return redirect('/');
      }

      function cancel() {
        return redirect('/');
      }

      function remove($id) {
        ObjectFlorian::find($id)->delete();
        return redirect('/');
      }

}

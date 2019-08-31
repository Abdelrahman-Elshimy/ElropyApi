<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ClientController extends Controller
{
    public function store(Request $request) {
      // make rules for add new client
      $rules = [
        'name' => 'required',
        'address' => 'required',
        'mobile' => 'required'
      ];
      // validate on
      $validate = Validator::make($request->all(), $rules);
      // check if values validated
      // if values not valid
      if($validate->fails()) {
        return response(['status' => false, 'messages' => $validate->messages()]);
      }
      // if values valid
      else {
        $client = new \App\Client;

        // check if user exist
        $checkExist =  $client->where('name', $request->get('name'))->get()->count();

        // if user exist
        if($checkExist > 0) {
          return response(['status' => false, 'messages' => 'هذا العميل موجود بالفعل']);
        }
        // if user not exist
        else {

          // store data in new client
          $client->name = $request->get('name');
          $client->address = $request->get('address');
          $client->mobile = $request->get('mobile');

          // save client in database
          $client->save();

          // return response when client added
          return response(['status' => true,
          'messages' => 'تم اضافة عميل جديد', 'client' => $client->where('name', $request->get('name'))->get()]);
        }
      }

    }
}

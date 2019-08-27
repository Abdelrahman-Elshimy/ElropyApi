<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
  public function store(Request $request) {
    // make rules for add new client
    $rules = [
      'name' => 'required',
      'unit_count' => 'required',
      'unit_price' => 'required',
      'box_count' => 'required',
      'box_price' => 'required',
      'container_count' => 'required',
      'container_price' => 'required'
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
      $product = new \App\Product;

      // check if user exist
      $checkExist =  $product->where('name', $request->get('name'))->get()->count();

      // if user exist
      if($checkExist > 0) {
        return response(['status' => false, 'messages' => 'هذا المنتج موجود بالفعل']);
      }
      // if user not exist
      else {

        // store data in new client
        $product->name = $request->get('name');
        $product->unit_count = $request->get('unit_count');
        $product->unit_price = $request->get('unit_price');
        $product->box_count = $request->get('box_count');
        $product->box_price = $request->get('box_price');
        $product->container_count = $request->get('container_count');
        $product->container_price = $request->get('container_price');

        // save client in database
        $product->save();

        // return response when client added
        return response(['status' => true,
        'messages' => 'added', 'client' => $product->where('name', $request->get('name'))->get()]);
      }
    }

  }
}

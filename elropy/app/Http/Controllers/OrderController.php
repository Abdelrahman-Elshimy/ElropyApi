<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class OrderController extends Controller
{
    public function getCustomerOrder() {
        $client_id = 8;
        $bill_id = 1;
        $orders = DB::table('orders')->where('client_id', $client_id)->get();
        return $orders;
    }
    public function store(Request $request) {
        $client_id = 8;
        $bill_id = 1;
        // add rules to input
        $rules = [
            'name' => 'required',
            'unit_count' => 'required',
            'unit_price' => 'required',
            'box_count' => 'required',
            'box_price' => 'required',
            'container_count' => 'required',
            'container_price' => 'required',
        ];
        // make validate to inputs
        $validate = Validator::make($request->all(), $rules);
        // check if values validated
        // if values not valid
        if($validate->fails()) {
            return response(['status' => false, 'messages' => $validate->messages()]);
        }
        // if values valid
        else {

            $price = (floatval($request->get('unit_price')) * floatval($request->get('unit_count'))) + (floatval($request->get('box_price')) * floatval($request->get('box_count'))) + (floatval($request->get('container_price')) * floatval($request->get('container_count')));

            $order = new \App\Order;
            // store data in new client
            $order->name = $request->get('name');
            $order->unit_count = $request->get('unit_count');
            $order->unit_price = $request->get('unit_price');
            $order->box_count = $request->get('box_count');
            $order->box_price = $request->get('box_price');
            $order->container_count = $request->get('container_count');
            $order->container_price = $request->get('container_price');
            $order->client_id = $client_id;
            $order->bill_id = $bill_id;
            $order->price = $price;
             // save client in database
            $order->save();

            // return response when client added
            return response(['status' => true,
            'messages' => 'added']);
        }


    }
}

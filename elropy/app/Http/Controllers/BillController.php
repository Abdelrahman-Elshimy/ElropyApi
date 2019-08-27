<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class BillController extends Controller
{
    public function getCustomerBill() {
        $client_id = 8;
        $bills = DB::table('bills')->where('client_id', $client_id)->get();
        return $bills;
    }

    public function store(Request $request) {
        $client_id = 8;
        // add rules to input
        $rules = [
            'value' => 'required',
            'buyed' => 'required',
            'depts_value' => 'required',
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
            $bill = new \App\Bill;
            // store data in new client
            $bill->value = $request->get('value');
            $bill->buyed = $request->get('buyed');
            $bill->depts_value = $request->get('depts_value');
            $bill->client_id = $client_id;
            // save client in database
            $bill->save();

            // return response when client added
            return response(['status' => true,
            'messages' => 'added']);
        }


    }
}

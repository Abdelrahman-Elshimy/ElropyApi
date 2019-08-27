<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Validator;
class DeptOperationController extends Controller
{
    public function getUserDeptOperation() {
        $client_id = 1;
        $operations = DB::table('dept_operations')->where('client_id', $client_id)->get();
        return $operations;

    }

    public function store(Request $request) {
        $client_id = 1;
        // add rules to input
        $rules = [
            'value' => 'required',
            'remain' => 'required'
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
            $deptOperation = new \App\DeptOperation;
            // store data in new client
            $deptOperation->value = $request->get('value');
            $deptOperation->remain = $request->get('remain');
            $deptOperation->client_id = $client_id;
            // save client in database
            $deptOperation->save();

            // return response when client added
            return response(['status' => true,
            'messages' => 'added']);
        }


    }
}

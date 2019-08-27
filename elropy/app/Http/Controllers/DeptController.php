<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class DeptController extends Controller
{
    public function update(Request $request, $id) {
        // make rules for add new dept
        $rules = [
          'value' => 'required',
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
          $dept = new \App\Dept;

          $deptSpec = $dept->find($id);

          $deptSpec->value = $request->get('value');
          $deptSpec->save();
          return response(['status' => true,
            'messages' => 'Updated', 'dept' => $deptSpec]);

        }

      }
    public function store(Request $request) {
        // make rules for add new dept
        $rules = [
          'client_id' => 'required',
          'value' => 'required',
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
          $dept = new \App\Dept;

          // check if dept exist
          $checkExist =  $dept->where('client_id', $request->get('client_id'))->get()->count();

          // if dept exist
          if($checkExist > 0) {
            return response(['status' => false, 'messages' => 'الرجاء تعديل القيمه فقط']);
          }
          // if dept not exist
          else {

            // store data in new dept
            $dept->client_id = $request->get('client_id');
            $dept->value = $request->get('value');

            // save dept in database
            $dept->save();

            // return response when dept added
            return response(['status' => true,
            'messages' => 'added', 'dept' => $dept->where('client_id', $request->get('client_id'))->get()]);
          }
        }

      }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckboxController extends Controller
{
    public function update(Request $request){
        $model = '\\App\\'.$request->model;
        $tobeUpdated = $model::find($request->id);
        $tobeUpdated->{$request->toBeChanged} = $request->val;
        $tobeUpdated->update();
        $msg = $request->val ? 'Added in featured products.' : 'Removed from featured products.';
        return response([
            "msg" => "{$msg}"
        ],200);
    }
}

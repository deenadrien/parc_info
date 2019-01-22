<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class MaterielController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function save_data(Request $request){

      $name = $request->input('name');
      $type = $request->input('type');
      $os = $request->input('os');
      $serial = $request->input('serial');
      $brand = $request->input('brand');
      $model = $request->input('model');
      $numcot = $request->input('numcot');
      $user = $request->input('user');
      $soft = $request->input('soft');

      $data = array('name'=>$name,'type'=>$type,'os'=>$os,'serial'=>$serial,'brand'=>$brand,'model'=>$model,'numcot'=>$numcot,'user'=>$user,'soft'=>$soft);

      DB::table('materiels')->insert($data);

      return redirect()->route('all');
    }
}

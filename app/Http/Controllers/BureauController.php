<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class BureauController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function save_data(Request $request){

      $name = $request->input('name');
      $floor = $request->input('floor');

      $data = array('name'=>$name,'floor'=>$floor);

      DB::table('bureaus')->insert($data);

      return redirect()->route('bureaux');
    }
}

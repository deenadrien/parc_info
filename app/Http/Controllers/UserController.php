<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function save_data(Request $request){

      $pec = $request->input('pec');
      $name = $request->input('name');
      $firstname = $request->input('firstname');
      $service = $request->input('service');
      $bureau = $request->input('bureau');

      $data = array('name'=>$name,'pec'=>$pec,'firstname'=>$firstname,'service'=>$service,'bureau'=>$bureau);

      DB::table('users')->insert($data);

      return redirect()->route('users');
    }
}

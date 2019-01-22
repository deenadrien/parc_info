<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class LogicielController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function save_data(Request $request){

      $name = $request->input('name');
      $office = $request->input('office');
      $salvia = $request->input('salvia');
      $cegid = $request->input('cegid');
      $leon = $request->input('leon');
      $crypto = $request->input('crypto');
      $ifc = $request->input('ifc');
      $pih = $request->input('pih');
      $pcb = $request->input('pcb');
      $forms = $request->input('forms');
      $gesprojet = $request->input('gesprojet');
      $creative = $request->input('creativesuite');

      $data = array('name'=>$name,'office'=>$office,'salvia'=>$salvia,'cegid'=>$cegid,'leon'=>$leon,'crypto'=>$crypto,'ifc'=>$ifc,'pih'=>$pih,'pcb'=>$pcb,'forms'=>$forms,'gesprojet'=>$gesprojet,'creativesuite'=>$creative);

      DB::table('logiciels')->insert($data);

      return redirect()->route('logiciels');
    }
}

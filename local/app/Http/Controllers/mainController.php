<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class mainController extends BaseController
{
   function Index($id='index'){
       $param = $id;
       if(file_exists($_SERVER['DOCUMENT_ROOT']."/local/resources/views/templates/".$param.".blade.php"))
       return view('templates.'.$param);

       return view($param);
   }
}

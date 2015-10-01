<?php

namespace App\Http\Controllers;


use App\pages;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Model;

class mainController extends BaseController
{
   function Index($id='index'){

       if(file_exists($_SERVER['DOCUMENT_ROOT']."/local/resources/views/templates/".$id.".blade.php"))
       $str='templates.'.$id;
       else $str=$id;

       return view($str);
   }
}

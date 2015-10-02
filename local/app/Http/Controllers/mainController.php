<?php

namespace App\Http\Controllers;


use App\Models\Page;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Model;

class mainController extends BaseController
{
   function Index($id='index'){

       $pages = Page::all();

       foreach($pages as $item)
       {
           if($id == $item->url)
               $temp = $item->content;
       };

       if(isset($temp))
           return view('templates.template_12',['content' => $temp ]);
       else
           return view('index');

      /*if(file_exists($_SERVER['DOCUMENT_ROOT']."/local/resources/views/templates/".$id.".blade.php"))
       $str='templates.'.$id;
       else $str=$id;

       return view($str);*/
   }


}

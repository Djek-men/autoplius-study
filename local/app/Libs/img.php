<?php namespace App\Libs;
use Image;
use Auth;
class Img
{
    public function __constructor()
    {

    }
    public function test()
    {
        echo "test";
    }
    public function url($path=null,$directory='/media/img/temp/',$name='')
    {
        if($path!=null)
        {

            $dir=$_SERVER['DOCUMENT_ROOT'].$directory;
            if(!is_dir($dir))
            {@mkdir($dir,0777);
            }
            $img = Image::make($path);
            $filename=$name.time().'.jpg';

            $img->resize(200,null,function($constraint){
                $constraint->aspectRatio();
            });
        $img->save($dir.$filename);
            return $filename;
        }
        else return false;
    }
}


<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GoodRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return ['name'=>'required|max:60','body'=>'required','cat_id'=>'required'];
            
        
    }
}

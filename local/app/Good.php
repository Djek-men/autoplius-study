<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $fillable = ['name','body','cat_id','text','user_id'];
}

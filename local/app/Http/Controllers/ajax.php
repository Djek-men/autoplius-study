<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;

class ajax extends Controller
{

    public function getIndex()
    {
        $tovar = Car::find($_GET['id']);
        return view('ajax.tovar')->with('tov',$tovar);
    }

}

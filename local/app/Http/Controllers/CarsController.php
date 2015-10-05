<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;
use Auth;
use App\Http\Requests\CarRequest;


class CarsController extends Controller
{
    
    public function getIndex()
    {
        
        return view('templates.cabinet');
    }
	
	public function getMycar()
	{
		$temp = Car::where('user_id',Auth::user()->id)->get();
        return view('templates.my_cars')->with('cars',$temp);
	}
	public function getAddcar()
	{
		return view('templates.addCar');
	}
	
    public function postIndex(CarRequest $req)
	{
		
		$req['user_id'] = Auth::user()->id;
		Car::create($req->except('_token'));
		return redirect('cabinet');
		
	}
	
	public function getDelete($id=null)
	{
		Car::where('id',$id)->delete();
		return redirect('cabinet');
	}
	
	public function getEdit($id=null)
	{
		$redact=Car::where('id',$id)->where('user_id',Auth::user()->id)->first();
		
		return view('templates.car_edit')->with('car',$redact);
	}
    
	public function postEdit(CarRequest $req, $id=null)
	{
		$req['user_id']=Auth::user()->id;
		Car::where('id',$id)->where('user_id',Auth::user()->id)->update($req->except('_token'));
		return redirect('cabinet');
	}
	
	
	
	
	
	
	
   
}

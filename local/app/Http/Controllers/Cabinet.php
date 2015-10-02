<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodRequest;
use App\Good;
use Auth;

class Cabinet extends Controller
{
    
    public function getIndex()
    {
	    $goods = Good::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(20);
        return view('templates.cabinet')->with('goods',$goods);
    }

	public function postIndex(GoodRequest $r)
	{
		$r['user_id'] = Auth::user()->id;
		Good::create($r->all());
		
		return redirect('cabinet');
	}
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentsRequest;
use App\Models\Apartments;
use Illuminate\Support\Facades\DB;

class ApartmentsController extends Controller
{

    function getForm(){
        return view('realEstate.template.form');
    }

    function creat(ApartmentsRequest $request){
        $apartments = new Apartments($request->all());
        $apartments->save();
        return redirect('/form')
            ->with('success','Creat success');
    }

    function getAll(){
        $apartments = DB::table('apartments')->get();
        return view('realEstate.template.home-page',[
            'apartments'=>$apartments
        ]);
    }
}

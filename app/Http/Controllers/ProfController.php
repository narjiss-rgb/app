<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prof;
use App\Classe;


class ProfController extends Controller
{
    public function index()
    {
       return view('prof.prof');
    }

    // create class
    

    //create prof

    public function createProf(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        
        $profs = Prof::create($validateData);
        $profs->save();
        redirect('prof.createProf');
    }

    public function createProfView()
    {
        return view('prof.createProf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use Illuminate\Support\Facades\Auth;

class ClasseController extends Controller
{
    //
    public  function createClasse(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
        ]);
      //  $classes = Classe::create($validateData);
        //$classes->save();
       
        $classe = new Classe();
        $classe->name = $request->input('name');
        $classe->user_id =Auth::id();
        $classe->save();
        redirect('prof.createClasse');
    }
    public function createClasseView()
    {
        return view('prof.createClasse');
    }
}

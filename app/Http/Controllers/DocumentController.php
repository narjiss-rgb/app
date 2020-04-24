<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;


class DocumentController extends Controller
{
    function createDocument(Request $request)

    {
        $documents = new Document();

        $validateData = $request->validate([
            'name' => 'required',
            'path' => 'mimes:mp4,avi,mov,mpg,asf,wma,vob|max:2048',
        ]);

        $documents->name = $request->input('name');
        //$request->path->store('path');
        if($request->hasFile('path')){
        $documents->path= $request->path->store('path');
    }
        $documents->save();
        redirect('cour.createDocument');
    }

    function createDocumentView()
    {   
        return view('cour.createDocument');
    }
    function index(){
        $docs=Document::all();
        return view('cour.cour',['docs'=> $docs]);
    }
   /* function docs(){

        $docs=Document::where('path','like','%mp4')->get();
        return view('cour.cour',['docs'=> $docs]);
   }*/
}

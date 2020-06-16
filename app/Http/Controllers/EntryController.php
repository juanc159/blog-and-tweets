<?php

namespace App\Http\Controllers;
use App\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create()
    {
        return view('entries.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        //validando campos
        $validateData = $request->validate([
            'titulo' => 'required|min:7|max:255|unique:entries',
            'contenido' => 'required|min:10|max:3000'            
        ]);

        $entry = new Entry();
        $entry->titulo = $validateData['titulo'];
        $entry->contenido = $validateData['contenido'];
        $entry->user_id = auth()->id();
        $entry->save();
        $status = 'Se ha registrado la ENTRADA exitosamente';
        return back()->with(compact('status'));

    }

    public function edit(Entry $entry){
        $this->authorize('update',$entry);
        return view('entries.edit',compact('entry'));
    }

    public function update(Request $request, Entry $entry)
    {
        $this->authorize('update',$entry);
        $validateData = $request->validate([
            'titulo' => 'required|min:7|max:255|unique:entries,id,'.$entry->id,
            'contenido' => 'required|min:10|max:3000'            
        ]);
        
        
            $entry->titulo = $validateData['titulo'];
            $entry->contenido = $validateData['contenido']; 
            $entry->save();
            $status = 'Se ha registrado la ENTRADA exitosamente';
        
        
        return back()->with(compact('status'));

    }
     
}

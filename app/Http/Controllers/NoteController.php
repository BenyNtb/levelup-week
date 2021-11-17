<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $note = Note::all();
        return view('notes.ckeditor',compact('note'));
    }
    public function prive()
    {
        $note = Note::all();
        return view('partial.perso.prive',compact('note'));
    }
    public function store (Request $request){
        $note = new Note();
        $note->titre = $request->titre;
        $note->description = $request->description;
        $note->user_id = Auth::user()->id;
        $note->save();
        return redirect()->route('home')->with('success', 'Note ajouté avec succès');
    }
    public function edit(Note $note)
    {
        $this->authorize('auteur', Auth::user());
        $tag = Tag::all();

        return view('ckeditors.edit', compact('note', 'tag')); 
    }
    public function update(Request $request, Note $note)
    {
        $this->authorize('auth', Auth::user()); 

        $request->validate([
            "tag_id" => "required",
            "titre" => "required", 
            "description" => "required"
        ]);

        // $cards->titre = '';
        $note->tag_id  = $request->tag_id; 
        $note->titre = $request->titre; 
        $note->description = $request->description; 
        $note->save(); 
        return redirect()->route('ckeditor.index')->with('success', 'Note modifié avec succès'); 
    }
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->back();
    }
    public function show(Note $id)
    {
        $note = $id;
        return view('perso.prive', compact('note'));
    }
}

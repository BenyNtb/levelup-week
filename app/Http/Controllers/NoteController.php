<?php

namespace App\Http\Controllers;

use App\Models\Editeur;
use App\Models\Note;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $note = Note::all();
        return view('notes.ckeditor', compact('note'));
    }
    public function prive()
    {
        $notes = Note::all();
        return view('partial.perso.prive', compact('notes'));
    }
    public function store(Request $request)
    {
        $note = new Note();
        $note->titre = $request->titre;
        $note->description = $request->description;
        $note->tag = $request->tag;
        $note->user_id = Auth::user()->id;
        $note->save();
        return redirect()->route('home')->with('success', 'Note ajouté avec succès');
    }
    public function edit(Note $id)
    {
        // $this->authorize('auteur', Auth::user());
        $note = $id;
        // $tag = Tag::all();

        return view('notes.edit', compact('note'));
    }
    public function update(Request $request, Note $id)
    {
        // $this->authorize('auth', Auth::user()); 

        $request->validate([
            // "tag_id" => "required",
            "titre" => "required",
            "description" => "required"
        ]);

        // $note->tag_id  = $request->tag_id; 
        $note = $id;
        $note->titre = $request->titre;
        $note->description = $request->description;
        $note->user_id = Auth::user()->id;
        $note->save();
        return redirect()->route('prive.index')->with('success', 'Note modifié avec succès');
    }
    public function destroy(Note $id)
    {
        $note = $id;
        $note->delete();
        return redirect()->back();
    }
    public function show(Note $id)
    {
        $note = $id;
        return view('perso.prive', compact('note'));
    }
    public function share(Note $id, Request $request)
    {
        $note = $id;
        $editeur = new Editeur();
        $editeur->user_id = $request->share;
        $editeur->note_id = $note->id;
        $editeur->save();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    public function create()
    {
        return view('partial.tags.create');
    }
    public function edit(Tag $id)
    {
        $tag = $id;
        return view('notes.edit', compact('tag'));
    }
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->user_id = Auth::user()->id;
        $tag->save();
        return redirect()->route('partial.perso.prive');
    }

}

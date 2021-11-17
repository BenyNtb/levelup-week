<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $presentation = Note::all();
        return view('admin.about.presentation', compact('presentation'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $notes = Note::all();
        return view('home', compact('notes'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $current_view = 'all';
        $editeurs = User::orderBy('name')->where('role_id', 4)->get();
        $roles = Role::all();
        $notes = Note::all();

        return view('partial.perso.prive', compact('editeurs', 'roles', 'notes', 'current_view'));
    }
}

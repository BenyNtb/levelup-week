@extends('layouts.index')
    @section('content')
    <div>
        <h3>Création de notes</h3>
        <form action="{{ route('ckeditors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-input id="titre" class="block mt-1 w-full" type="text" name="titre" placeholder="Ajouter un titre" required autofocus />
            <x-input id="tag" class="block mt-1 w-full" type="text" name="tag" placeholder="Créer un tag" required autofocus />
            <textarea cols="80" class="editor" id="editeur" name="description" rows="10"></textarea>
            <div class="flex flex-col md:w-1/6">
                <input type="submit" value="Ajouter" class="bg-green-400 hover:bg-green-300 rounded:md" />
            </div>
        </form>
        
        
    </div>
    @endsection


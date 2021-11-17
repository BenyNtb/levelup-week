@extends('layouts.index')

@section('content')
    <div>
        <h1>Mes notes privées</h1>
        <a href="{{route('home')}}">Retour aux notes globales</a>
        <div>
            @foreach ($notes as $note)
                <p>{{$note->titre}}</p>
                <p>{{$note->description}}</p>
            @endforeach
            
            
        </div>
    </div>
@endsection
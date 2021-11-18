@extends('layouts.index')

@section('content')
@include('partial.navigation')
<div>
    <h1>Mes notes privées</h1>
    <a href="{{ route('home') }}">Retour aux notes globales</a>
    <div>
        @foreach ($notes as $note)
        <p>{!! $note->titre !!}</p>
        <p>{!! $note->description !!}</p>
        <a href="{{ route('ckeditors.edit', $note->id) }}" class="btn bg-yellow-500">Edit</a>
        <form method="POST" action={{ route('ckeditors.destroy', $note->id) }}>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn bg-red-600">Delete</button>
        </form>
        @endforeach


    </div>
</div>
@endsection

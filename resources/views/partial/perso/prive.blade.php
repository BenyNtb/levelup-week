@extends('layouts.index')

@section('content')
@include('partial.navigation')



<!-- component -->
<table class="min-w-full border-collapse block md:table">
    <thead class="block md:table-header-group">
        <tr
            class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                Titre</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                Description</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                Visibilité</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                Tag</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                Rôle</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                Actions</th>
        </tr>
    </thead>
    <tbody class="block md:table-row-group">
        @foreach ($notes as $note)
        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">

            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                    class="inline-block w-1/3 ">{!! $note->titre !!}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                    class="inline-block w-1/3 ">{!! $note->description !!}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                    class="inline-block w-1/3 ">{!! $note->tag !!}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                    class="inline-block w-1/3 ">
                    {{-- @if ($editeur contains($note_id))
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock" viewBox="0 0 16 16">
                                <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z"/>
                              </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                            </svg>
                            @endif</td> --}}

            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                    class="inline-block w-1/3 ">{{ $note->user->role->name }}</span></td>

            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><a
                        href="{{ route('ckeditors.edit', $note->id) }}" class="btn">Edit</a></button>
                <form method="POST" action={{ route('ckeditors.destroy', $note->id) }}>
                    @csrf
                    @method('DELETE')
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                </form>
                <form action="{{ route('prive.share', $note->id) }}" method="POST">
                    @csrf
                    <select name="share"
                        class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option>Partager ta note avec</option>
                        @foreach ($editeurs as $editeur)
                        <option value="{{ $editeur->id }}">{{ $editeur->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="bg-green-500 ">Envoyer</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection

{{-- <div>
    <h1>Mes notes privées</h1>
    <a href="{{ route('home') }}">Retour aux notes globales</a>
<div>
    @foreach ($notes as $note)
    <p>{!! $note->titre !!}</p>
    <p>{!! $note->description !!}</p>
    <div class="relative inline-flex">
        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 412 232">
            <path
                d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                fill="#648299" fill-rule="nonzero" />
        </svg>
    </div>
    <a href="{{ route('ckeditors.edit', $note->id) }}" class="btn bg-yellow-500">Edit</a>
    <form method="POST" action={{ route('ckeditors.destroy', $note->id) }}>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn bg-red-600">Delete</button>
    </form>
    <form action="{{ route('prive.share', $note->id) }}" method="POST">
        @csrf
        <select name="share"
            class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            <option>Partager ta note avec</option>
            @foreach ($editeurs as $editeur)
            <option value="{{ $editeur->id }}">{{ $editeur->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="bg-green-500 ">Envoyer</button>
    </form>
    @endforeach

</div>
</div> --}}

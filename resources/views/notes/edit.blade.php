<h3>Edit note</h3>
<form action="{{route('ckeditors.update', $note->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" value="{{$note->titre}}" class="form-control @error('description') is-invalid @enderror">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{$note->description}}" class="form-control @error('description') is-invalid @enderror">
    <div class="flex flex-col md:w-1/6">
        <button type="submit" class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2" >Update</button>
    </div>
</form>
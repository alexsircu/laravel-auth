@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Aggiungi un nuovo post</h1>

      <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" placeholder="Inserisci il titolo">
        </div>

        <div class="form-group">
          <label for="text">Testo del post</label>
          <textarea name="text" id="text" class="form-control" cols="30" rows="5" placeholder="Inserisci il testo">{{ old('text') }}</textarea>  
        </div>

        <div class="form-group">
          <label for="image_path">Immagine del post</label>
          <input type="file" accept="image/*" id="image_path" class="form-control" name="image_path">
        </div>

        <input type="submit" class="btn btn-primary" value="Aggiungi">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Indietro</a>
      </form>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Aggiungi un nuovo post</h1>

      <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" placeholder="Inserisci il titolo">

          <label for="text">Testo del post</label>
          <textarea name="text" id="text" class="form-control" cols="30" rows="5" placeholder="Inserisci il testo">{{ old('text') }}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Aggiungi">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Indietro</a>
      </form>
    </div>
@endsection
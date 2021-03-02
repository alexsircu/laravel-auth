@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Post</h1>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Data creazione</th>
            <th>Immagine</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->format('d-m-Y') }}</td>
                <td><img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="size_img"></td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection
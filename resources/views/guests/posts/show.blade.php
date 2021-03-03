@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>{{ $post['title'] }}</h1>
      <img src="{{ asset('storage/' . $post->image_path) }}" alt="">
      <p>{{ $post['text'] }}</p>
    </div>
@endsection
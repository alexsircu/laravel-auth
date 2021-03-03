@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>BLOG</h1>
      <div class="card-deck">
        @foreach ($posts as $post)
        <div class="card text-white bg-primary">
          <div class="card-header">
            <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
            <small>{{ $post->user->name }}</small>
          </div>
          <div class="card-body">
            <p>{{ $post->text }}</p>
          </div>
        </div>    
      @endforeach
      </div>
    </div>
@endsection
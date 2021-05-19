@extends('layouts.app')
@section('main')
<main>
  <div class="container">
      <h1>Laravel Model Controller</h1>
      <div class="">
          @foreach ($movies as $movie)
          <div class="card">
              <h3>{{$movie['title']}}</h3>
              <h4>{{$movie['original_title']}}</h4>
              <p>{{$movie['nationality']}}</p>
              <p>{{$movie['date']}}</p>
              <p>{{$movie['vote']}}</p>
          </div>
          @endforeach
      </div>
  </div>


</main>
@endsection

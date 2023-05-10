@extends('layouts/main')

@section('content')
    <h1>FILMONI</h1>
    <div class="container">
        @foreach ($movies as $film)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$film->title}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$film->original_title}}</h6>
              <p class="card-text">{{$film->nationality}}</p>
              <br>
              <p class="card-link">{{$film->date}}</p>
              <strong>Vote:</strong> <p class="card-link">{{$film->vote}}</p>
            </div>
          </div>
        @endforeach
    </div>    
@endsection
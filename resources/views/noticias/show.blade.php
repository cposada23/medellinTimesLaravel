@extends('layouts.app')

@section('content')
  <h1 class="h3">{{$noticia->titulo}}</h1>
  <img class="img-thumbnail" src="{{$noticia->image}}" alt="">
  <p class="card-text">{{$noticia->texto}}</p>
  <small class="text-muted">{{ $noticia->created_at }}</small>
@endsection


@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="title m-b-md">
        Medellín Times
    </div>

    <div class="links">
        @foreach ($links as $link => $text)
        <a href="{{ $link }}">{{ $text }}</a>
        @endforeach
    </div>
</div>

<div class="row">
    <div class="col">
        <h1>Conoce sobre nuestra puublicidad</h1>
    </div>
</div>


<div class="row">

    @forelse($publicidades as $publicidad)
        <div class="col col-6">
            <img class="img-thumbnail" src="{{ $publicidad->image }}" alt="">
            <p class="card-text">
                {{ $publicidad->descripcion }}
                <a href="/noticia/{{ $publicidad->id }}">Más Info</a>
            </p>
       </div>
    @empty
        <p>No hay Publicidad</p>
    @endforelse

    @if(count($publicidades))
        <div class="mt-2 mx-auto">
        {{ $publicidades->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>
@endsection
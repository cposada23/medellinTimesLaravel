
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
        <h1>Mira los próximos Eventos</h1>
    </div>
</div>


<div class="row">

    @forelse($eventos as $evento)
        <div class="col col-6">
            <img class="img-thumbnail" src="{{ $evento->image }}" alt="">
            <p class="card-text">
                {{ $evento->descripcion }}
                <a href="/noticia/{{ $evento->id }}">Leer más</a>
            </p>
       </div>
    @empty
        <p>No hay Eventos</p>
    @endforelse

    @if(count($eventos))
        <div class="mt-2 mx-auto">
        {{ $eventos->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>
@endsection
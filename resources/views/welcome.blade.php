
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
        <h1>Noticias</h1>
    </div>
</div>

<!--<div class="row">
    <form action="/noticia/create" method="post" enctype="multipart/form-data">
        <div class="form-group @if($errors->has('texto')) has-danger @endif" >
            {{ csrf_field() }}
            <input type="text" name="texto" class="form-control" placeholder="Qué estas pensando?">
            @if ($errors->has('texto'))
                @foreach ($errors->get('texto') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                @endforeach
            @endif
            <input type="file" class="form-control-file" name="image">
        </div>
    </form>
</div>-->
<div class="row">

    @forelse($noticias as $noticia)
        <div class="col col-6">
            <img class="img-thumbnail" src="{{ $noticia->image }}" alt="">
            <p class="card-text">
                {{ $noticia->descripcion }}
                <a href="/noticia/{{ $noticia->id }}">Leer más</a>
            </p>
       </div>
    @empty
        <p>No hay noticias</p>
    @endforelse

    @if(count($noticias))
        <div class="mt-2 mx-auto">
        {{ $noticias->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>
@endsection
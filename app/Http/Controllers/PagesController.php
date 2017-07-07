<?php

namespace medellintimes\Http\Controllers;

use Illuminate\Http\Request;
use medellintimes\Noticia;
use medellintimes\Evento;
use medellintimes\Publicidade;
class PagesController extends Controller
{
    public function home()
    {
        // Links para la pagina principal
        $links = [
            '/noticias' => 'Noticias',
            '/eventos' => 'Eventos',
            '/publicidad' => 'Publicidad'
        ];

        // $noticias = Noticia::all(); // trae todas las noticias
        $noticias = Noticia::paginate(10);
        return view('welcome', [
            'links' => $links,
            'noticias' => $noticias
        ]);
    }

    public function eventos() {
        $links = [
            '/noticias' => 'Noticias',
            '/eventos' => 'Eventos',
            '/publicidad' => 'Publicidad'
        ];

        // $noticias = Noticia::all(); // trae todas las noticias
        $eventos = Evento::paginate(10);
        return view('eventos', [
            'links' => $links,
            'eventos' => $eventos
        ]);
    }

    public function publicidad() {
        $links = [
            '/noticias' => 'Noticias',
            '/eventos' => 'Eventos',
            '/publicidad' => 'Publicidad'
        ];

        // $noticias = Noticia::all(); // trae todas las noticias
        $publicidades = Publicidade::paginate(10);
        return view('publicidad', [
            'links' => $links,
            'publicidades' => $publicidades
        ]);
    }
 }

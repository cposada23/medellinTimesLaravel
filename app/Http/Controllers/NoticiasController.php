<?php

namespace medellintimes\Http\Controllers;

use Illuminate\Http\Request;
use medellintimes\Noticia;
use medellintimes\Http\Requests\CreateNoticiaRequest;
class NoticiasController extends Controller
{
    public function detalle(Noticia $noticia){
        //buscar la noticia por id

        return view('noticias.show', [
            'noticia' => $noticia,
        ]);
    }

    public function show(Noticia $noticia) {
        return $noticia;
    }

    public function index(){
        // $noticias = Noticia::paginate(10);

        $noticias = Noticia::all();
        // $noticias = $noticias->sortByDesc('created_at');

        return $noticias;
    }

    public function destroy($id) {
        $noticia = Noticia::find($id)->delete();
        // return $noticia;
        $res = [
            'Success' => 'Borrado exitoso'
        ];
        return $res;
    }

    public function update(Noticia $noticia, Request $request) {
        $noticia->titulo =  $request->input('titulo');
        $noticia->descripcion = $request->input('descripcion');
        $noticia->texto = $request->input('texto');
        $noticia->save();
        return $noticia;
    }

    public function store(Request $request) {
        $titulo = $request->input('titulo');
        $noticia = Noticia::create([
            'titulo'=> $request->input('titulo'),
            'image' => 'http://lorempixel.com/600/338?'.mt_rand(0,1000),
            'descripcion' => $request->input('descripcion'),
            'texto' => $request->input('texto')
        ]);
        return $noticia;
    }

    public function create2(CreateNoticiaRequest $request) {
        // dd($request->all());
        // return 'Created';
        $image = $request->file('image');
        $noticia = Noticia::create([
            'titulo'=> 'Noticia de prueba2',
            'image' => 'http://lorempixel.com/600/338?'.mt_rand(0,1000),
            'descripcion' => 'descripcion noticia prueba2',
            'texto' => $request->input('texto')
        ]);
        //  $noticia = Noticia::create([
        //     'titulo'=> 'Noticia de prueba2',
        //     'image' => $image->store('messages'),
        //     'descripcion' => 'descripcion noticia prueba2',
        //     'texto' => $request->input('texto')
        // ]);
        // dd($noticia);
        return redirect('/noticia/'.$noticia->id);
    }
}

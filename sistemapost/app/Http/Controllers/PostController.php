<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Posts;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(Input::file('imagem'))
        {
            $imagem = Input::file('imagem');
            $extensao = $imagem->getClientOriginalExtension();
            if($extensao != 'jpg' && $extensao != 'png')
            {
                return back()->with('erro','Erro: Este arquivo não é imagem');
            }
        }
        $post = new Posts;
        $post->titulo = Input::get('titulo');
        $post->conteudo = Input::get('conteudo');
        $post->imagem = "";
        $post->save();
        if(Input::file('imagem'))
        {
            File::move($imagem,public_path().'/imagem-post/post-id_'.$post->id.'.'.$extensao);
            $post->imagem = '/imagem-post/post-id_'.$post->id.'.'.$extensao;
            $post->save();
        }
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
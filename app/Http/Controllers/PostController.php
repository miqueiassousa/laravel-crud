<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        public function create(Request $request) {
            $new_post = [
                'title' => 'Meu primeiro post',
                'content' => 'Conteudo qualquer',
                'author' => 'Miquéias'
            ];

            $post = new Post($new_post);

            // Outra forma de fazer:

            // $post->title = 'Meu primeiro post';
            // $post->content = 'Conteudo qualquer';
            // $post->author = 'Miquéias';
            // $post->save();

            $post->save();

            dd($post); /* Debugar dados no browser */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // No futuro recebera um post com o novo recurso
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = new Post();

        $post = $post->find($id);

        dd($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id)>update([
            'author' => 'Desconhecido'
        ]);

        // $post = Post::find(1);
        // $post->title = 'Meu post atualizado';
        // $post->save();
        // return $post;

        return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        return $post;
    }
}

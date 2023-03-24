<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
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

    public function read(Request $r) {

        $post = new Post();

        $post = $post->find(1);

        dd($post);
    }

    public function all(Request $r) {

        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request) {

        $post = Post::where('id','>',0)->update([
            'author' => 'Desconhecido'
        ]);

        // $post = Post::find(1);
        // $post->title = 'Meu post atualizado';
        // $post->save();
        // return $post;

        return $post;
    }
}

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
}

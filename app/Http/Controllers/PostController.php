<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Louay titre 1',
            'Louay titre2',
            'Loauy Titre 3'
        ];
        $title = 'mon Super premier Titre';
        $title2 = 'mon Super deuxieme Titre';

        // 1er Methode
        //return view('articles', compact('title'));
        // 2eme Methode
        //return view('articles')->with('title',$title);
        // 3eme Methode
        // return view('articles',[
        //     'title' => $title,
        //     'title2'=> $title2
        // ]);
        // 4eme Methode
        return view('articles',compact('posts'));



    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show()
    {
        $galleries = \App\Gallery::all();

        $tags = [];
        foreach ($galleries as $photo){
            if (!(in_array($photo->tag, $tags))){
                $tags[] = $photo->tag;
            }
        }

        return view('pages/gallery', compact('galleries', 'tags'));
    }

    public function showTag($tag)
    {
        $galleries = \App\Gallery::where('tag', $tag)->get();
        $all = \App\Gallery::all();

        $tags = [];
        foreach ($all as $photo){
            if (!(in_array($photo->tag, $tags))){
                $tags[] = $photo->tag;
            }
        }

        return view('pages/gallery-tags', compact('galleries', 'tags'));

    }
}

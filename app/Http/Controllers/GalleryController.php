<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show()
    {
        $galleries = \App\Gallery::all();
        return view('pages/gallery', compact('galleries'));
    }
}

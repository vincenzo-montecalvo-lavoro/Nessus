<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Cover;
use App\Models\Track;

class SearchController extends Controller
{
    public function get()
    {
        return view('search');
    }
    public function post(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
        ]);

        $album = Album::where('name', $validated['name'])->first();
        $covers = Cover::where('album_id', $album->id)->get();
        $tracks = Track::where('album_id', $album->id)->get();

        return view('album', ['album' => $album, 'covers' => $covers, 'tracks' => $tracks]);
    }
}

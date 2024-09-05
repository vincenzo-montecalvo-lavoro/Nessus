<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Cover;
use App\Models\Track;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function get()
    {
        return view('AlbumForm');
    }
    public function post(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required'],
            'artist' => ['required'],
        ]);

        $album = new Album($validated);
        Auth::user()->albums()->save($album);

        foreach ($request->file('covers') as $file) {
            $path = $file->store($file->getClientOriginalName(), 'public');
            $cover = new Cover([
                'path' => $path,
            ]);
            $album->covers()->save($cover);
        }

        foreach ($request->file('tracks') as $file) {
            $path = $file->store($file->getClientOriginalName(), 'public');
            $name = $file->getClientOriginalName();
            $track = new Track([
                'path' => $path,
                'name' => $name,
            ]);
            $album->covers()->save($track);
        }

        return redirect('/search');
    }
}

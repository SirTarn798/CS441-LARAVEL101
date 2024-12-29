<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Repositories\ArtistRepository;

class ArtistController extends Controller
{
    public function __construct(
        private ArtistRepository $artistRepository
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = $this->artistRepository->get();
        return view('artists.index', [
            'artists' => $artists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artist_name = $request->get('name');
        if ($artist_name === null) {
            return redirect()->back();
        }
        if ($this->artistRepository->isExists($artist_name)) {
            return redirect()->back();
        }
        $this->artistRepository->create([
            'name' => $artist_name
        ]);

        return redirect()->route('artists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist = $this->artistRepository->getById($id);
        return view('artists.show', [
            'artist' => $artist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit', [
            'artist' => $artist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        $artist_name = $request->get('name');
        if ($artist_name === null) {
            return redirect()->back();
        }
        if ($this->artistRepository->isExists($artist_name, $artist->id)) {
            return redirect()->back();
        }
        $this->artistRepository->update([
            'name' => $artist_name
        ], $artist->id);
        return redirect()->route('artists.show', ['artist' => $artist]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        if ($artist->songs->isEmpty()) {
            $artist->delete();
            return redirect()->route('artists.index');
        }
        return redirect()->route('artists.index');
    }

    public function createSong(Artist $artist) {
        return view('artists.create-song', [
            'artist' => $artist
        ]);
    }
}

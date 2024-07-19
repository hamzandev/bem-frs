<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::getNLatest(3);


        $latestArtikel = $artikels->count() > 0 ? $artikels->slice(0,1)[0] : null;
        $twoOtherArtikels = $artikels->slice(1, 2);

        return view('artikel.index', compact('latestArtikel', 'twoOtherArtikels'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artikel = Artikel::findWithRelationById($id);

        $latestArtikels = Artikel::getOtherArticles($id, 5, true);
        $otherArtikels = Artikel::getOtherArticles($id, 5);

        return view('artikel.show', compact('artikel', 'otherArtikels', 'latestArtikels'));
    }
}

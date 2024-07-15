<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Category;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('aspirasi.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'telepon' => 'required|string|max:15',
            'judul' => 'required|string|max:255',
            'aspirasi' => 'required|string',
            'is_anonimous' => 'sometimes|boolean'
        ]);

        $aspirasi = new Aspirasi();
        $aspirasi->nama_mahasiswa = $request->nama_mahasiswa;
        $aspirasi->category_id = $request->category_id;
        $aspirasi->telepon = $request->telepon;
        $aspirasi->judul = $request->judul;
        $aspirasi->aspirasi = $request->aspirasi;
        $aspirasi->is_anonimous = $request->has('is_anonimous');
        $aspirasi->save();

        return redirect()->back()->with('success', 'Aspirasi berhasil dikirim.');
    }
}

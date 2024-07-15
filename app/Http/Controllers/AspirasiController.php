<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\AspirasiCategory;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    function index()  {
        $aspirasis = Aspirasi::with('aspirasis_category')->paginate(4);
        $categories = AspirasiCategory::latest()->get();
        return view('aspirasi', compact('categories', 'aspirasis'));
    }

    function store(Request $request) {
        $request->validate([
            'nama_mahasiswa' => 'required|min:3|max:255',
            'aspirasis_category_id' => 'required|exists:aspirasi_categories,id',
            'judul' => 'required|min:5|max:255|regex:/^[a-zA-Z0-9\s]+$/',
            'aspirasi' => 'required|min:10|regex:/^[a-zA-Z0-9\s]+$/|max:1000',
        ], [
            'aspirasis_category_id.exists' => 'Kategori aspirasi tidak ada!',
            'aspirasis_category_id.required' => 'Kategori aspirasi harus dipilih!',
            'nama_mahasiswa.required' => 'Nama harus diisi!',
            'judul.required' => 'Judul Aspirasi harus diisi!',
            'aspirasi.required' => 'Isi Aspirasi harus diisi!',
        ]);

        Aspirasi::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'aspirasis_category_id' => $request->aspirasis_category_id,
            'judul' => $request->judul,
            'aspirasi' => $request->aspirasi,
            'telepon' => $request->telepon,
            'is_anonimous' => $request->has('is_anonimous') ? true : false,
        ]);
        return redirect('/aspirasi#aspirasi-alert',)
            ->with('message', 'Aspirasi anda telah Terkirim! Terimakasih atas partisipiasi anda dalam meningkatkan kinerja dan kenyamanan lingkunan Fakultas Rekayasa Sistem!');
    }
}

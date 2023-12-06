<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BukuController extends Controller
{
    public function index()
    {
        $book = Buku::get();   

        return view('buku.index', compact('book'));
        // return response()->json($book);
    }

    public function create()
    {
        return view('buku.tambah');
    }

    public function store(Request $request)
    {
        Buku::create([
            'kode_buku'  => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'pengarang' => $request->pengarang,
            'status' => '0', 
        ]);
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // return response()->json("Data Berhasil Tambahkan");
    }

    public function edit(string $kode_buku)
    {
        $book = Buku::findOrFail($kode_buku);
        return view('buku.edit', compact('book'));
    }

    public function update(Request $request, string $kode_buku)
    {
        $book = Buku::findOrFail($kode_buku);

        $bookdata = [
            'kode_buku'    => $request->kode_buku,
            'judul_buku'   => $request->judul_buku,
            'penerbit'     => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn'         => $request->isbn,
            'pengarang'    => $request->pengarang,
        ];
        if ($request->has('status')){
            $bookdata['status'] = $request->status;
        }
        $book->update($bookdata);


        return redirect()->route('buku.index');
        // return response()->json("Data Berhasil Diedit");
    }

    public function destroy(string $kode_buku)
    {
        $book = Buku::findOrFail($kode_buku);
        $book->delete();
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);
        // return response()->json("Data Berhasil Dihapus");
    }
    public function show(string $kode_buku)
    {
        //get post by ID
        $bookp = Buku::findOrFail($kode_buku);

        return response()->json($bookp);

        //render view with post
    }
}

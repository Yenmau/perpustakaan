<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $agt = Anggota::get();
        return view('anggota.index', compact('agt'));
        // return response()->json($agt);
    }

    public function create()
    {
        return view('anggota.tambah');
    }

    public function store(Request $request)
    {
       
        Anggota::create([ 
            'nomor_anggota'  => $request->nomor_anggota,
            'nama_anggota' => $request->nama_anggota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas,
            'angkatan' => $request->angkatan,
        ]);
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // return response()->json("Data Berhasil Ditambah");
    }

    public function show()
    {
        //
    }

    public function edit(String $nomor_anggota)
    {
        $agt = Anggota::findOrFail($nomor_anggota);
        return view('anggota.edit', compact('agt'));
    }

    public function update(Request $request, Anggota $agt, $nomor_anggota)
    {
    
        $agt = Anggota::findOrFail($nomor_anggota);

        $agt->update([ 
            'nomor_anggota'  => $request->nomor_anggota,
            'nama_anggota' => $request->nama_anggota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas,
            'angkatan' => $request->angkatan,
        ]);
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // return response()->json("Data Berhasil Diedit");
    }

    public function destroy(String $nomor_anggota)
    {
        $agt = Anggota::findOrFail($nomor_anggota);
        $agt->delete();
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Dihapus!']);
        // return response()->json("Data Berhasil Hapus");
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $agt = Anggota::where('nama_anggota', 'LIKE', '%' . $search . '%')->get();
        } else {
            $agt = Anggota::all()->paginate();
        }
    
        return view('anggota.index', compact('agt', 'search'));
    }
}

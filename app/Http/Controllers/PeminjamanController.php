<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function index()
    {
        $pinjam = DB::table('peminjaman')
        ->select('peminjaman.*', 'buku.*', 'anggota.*')
        ->leftJoin('buku', 'peminjaman.kode_buku', '=', 'buku.kode_buku')
        ->leftJoin('anggota', 'peminjaman.nomor_anggota', '=', 'anggota.nomor_anggota')
        ->orderby('peminjaman.tgl_pinjam', 'DESC')
        ->get();

    return view('pinjam.index', compact('pinjam'));
        // return response()->json($pinjam);
    }

    public function create()
    {
        $buku = DB::table('buku')->where('status', 0)->get();
        $anggota = DB::table('anggota')->get();
        return view('pinjam.tambah', compact('buku', 'anggota'));
    }

    public function store(Request $request)
    {
        $cari = Peminjaman::where('kode_pinjam', $request->kode_pinjam)->first();
        if ($cari) {
            return redirect()->route('pinjam.create')->with('status', ['pesan' => 'Kode Pinjam sudah digunakan', 'icon' => 'error']);
            // return response()->json("Data Behasil Ditambah");
            
        }
    
        Peminjaman::create([
            'kode_pinjam' => $request->kode_pinjam,
            'tgl_pinjam'  => $request->tgl_pinjam,
            'kode_buku'  => $request->kode_buku,
            'nomor_anggota'  => $request->nomor_anggota,
        ]);
        DB::table('buku')->where('kode_buku', $request->kode_buku)->update(['status' => 1]);
        return redirect()->route('pinjam.index')->with('status', ['pesan' => 'Berhasil disimpan', 'icon' => 'success']);
        // return response()->json("Data Behasil Ditambah");
       
    }

    public function show(Peminjaman $peminjaman)
    {
        //
    }


    public function edit(String $kode_pinjam)
    {
        $pinjam = Peminjaman::findOrFail($kode_pinjam);
        $buku = Buku::get();
        $anggota = Anggota::get();
        return view('pinjam.edit', compact('pinjam','buku', 'anggota'));
    }

    public function update(Request $request, $kode_pinjam) {
        $pinjam = Peminjaman::findOrFail($kode_pinjam);

        $pinjam->update([
            'kode_pinjam' => $request->kode_pinjam,
            'tgl_pinjam'  => $request->tgl_pinjam,
            'kode_buku'  => $request->kode_buku,
            'nomor_anggota'  => $request->nomor_anggota, 
        ]);
        return redirect()->route('pinjam.index');
        // return response()->json("Data Behasil Diedit");

    }

    public function destroy(Request $request,String $kode_pinjam)
    {
        $pinjam = Peminjaman::findOrFail($kode_pinjam);
        $pinjam->delete();

        Buku::where('kode_buku', $request->kode_buku)->update(['status' => 0]);
        return redirect()->route('pinjam.index');
        // return response()->json("Data Behasil Dihapus");
    }

    public function kembali(String $kode_pinjam) {
        $buku = DB::table('buku')->get();
        $anggota = DB::table('anggota')->get();
        $pinjam = Peminjaman::findOrFail($kode_pinjam);
        return view('pinjam.kembali', compact('buku', 'anggota', 'pinjam'));
    }

    public function simpan_kembali(Request $request, String $kode_pinjam) {
        $pinjam = Peminjaman::findOrFail($kode_pinjam);
        $pinjam->update(['tgl_kembali'    => $request->tgl_kembali,]);
		Buku::where('kode_buku', $request->kode_buku)->update(['status' => 0]);
        return redirect()->route('pinjam.index')->with('status', ['pesan' => 'Berhasil disimpan', 'icon' => 'success']);
        // return response()->json("Data Behasil Dikembalikan");
    }

    // public function search(Request $request)
    // {
    //     $search = $request->search;
    //     $pinjam = Peminjaman::where(function($query) use ($search){

    //     $query->where('tgl_pinjam', 'like', "%$search%")
    //     ->orWhere('tgl_kembali', 'like', "%$search%");

    //     })

    //     ->orWhereHas('anggota', function($query) use ($search){
    //         $query->where('nama_anggota', 'like', "%$search%")
    //         ->orWhere('kelas', 'like', "%$search%")
    //         ->orWhere('angkatan', 'like', "%$search%");
            
    //     })

    //     ->orWhereHas('buku', function($query) use ($search){
    //         $query->where('kode_buku', 'like', "%$search%")
    //         ->orWhere('judul_buku', 'like', "%$search%");

    //     })
    //     ->get();

    //     return view('pinjam.index', compact('pinjam', 'search'));
    // }

    // public function search(Request $request)
    // {
    //     if($request->has('search')){
    //         $pinjam = Peminjaman::where('nama_anggota', 'LIKE', '%' .$request->search. '%')->get();
    //     } else {
    //         $pinjam = Peminjaman::all();
    //     }

    //     return view('pinjam.index', compact('pinjam', 'search'));
    // }
}

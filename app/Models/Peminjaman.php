<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    public $incrementing = false;
    protected $primaryKey = 'kode_pinjam';
    protected $fillable = ['kode_pinjam', 'tgl_pinjam', 'tgl_kembali', 'kode_buku', 'nomor_anggota','created_at','updated_at'];
}

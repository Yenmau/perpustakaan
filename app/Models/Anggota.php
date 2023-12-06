<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'nomor_anggota';
    public $incrementing = false;
    
    protected $fillable = ['nomor_anggota','nama_anggota','jenis_kelamin','kelas','angkatan', 'created_at', 'update_at'];
}

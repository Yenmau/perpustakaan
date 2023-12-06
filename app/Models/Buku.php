<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    public $incrementing = false;
    protected $primaryKey = 'kode_buku';
    protected $fillable = ['kode_buku','judul_buku','penerbit','tahun_terbit','isbn','pengarang','status','created_at', 'update_at'];

    protected $cast = ['tahun_terbit'];
}

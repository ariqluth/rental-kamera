<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table='pengembalian'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'id_ambil',
        'id_bayar',
        'id_customer',
        'id_pemilik',
        'tgl_Pengembalian',
        'disewa_kamera'
           
 ];

 public function pengambilan()
  {
     return $this->belongsTo( 'App\Models\Pengambilan');
 }

    public function pemilik()
    {
        return $this->belongsToMany(pemilik::class);
    }
}

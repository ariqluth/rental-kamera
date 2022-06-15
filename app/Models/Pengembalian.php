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
        'Bukti_Pengambilan',
        'Bukti_Pembayaran',
        'Bukti_Sewa',
        'Customer',
        'Pemilik',
        'Admin',
        'tanggal_Pengembalian' 
           
 ];

 public function pengambalian()
  {
     return $this->belongsTo( Pengambalian::class, 'pembayaran_id');
 }

    public function pemilik()
    {
        return $this->belongsToMany(pemilik::class);
    }
}

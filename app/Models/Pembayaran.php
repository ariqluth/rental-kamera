<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table='pembayaran'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'Customer',
        'Pemilik',
        'Tanggal_Pembayaran',
        'Jumlah_Pembayaran',
        'Bank',
        'Bank_tujuan',
        'Nama_Kamera',
        
           
 ];

 public function pembayaran()
  {
     return $this->hasOne( Pembayaran::class, 'penyewaan_id');
 }

    public function pengembalian()
    {
        return $this->belongsToMany(Pengembalian::class);
    }
}

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
        'customer',
        'pemilik',
        'tanggal_Pembayaran',
        'jumlah_Pembayaran',
        'bank',
        'bank_tujuan',
        'nama_Kamera',
        
           
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

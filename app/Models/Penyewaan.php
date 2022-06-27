<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $table='penyewaan'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'id_customer',
        'id_pemilik',
        'id_alat',
        'tanggal_sewa',
        'harga',
        'kamera_disewa',
        'alamat_tujuan',
        
           
 ];

 public function customer()
  {
     return $this->belongsTo( Pembayaran::class, 'pembayaran_id');
 }

 public function alat() {
    return $this->belongsTo( Alat::class, 'id');
 }

    public function pengembalian()
    {
        return $this->belongsToMany(Pengembalian::class);
    }
}

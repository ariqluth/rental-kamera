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
        'Customer',
        'Pemilik',
        'Kondisi_Kamera',
        'Tanggal_Sewa',
        'Total_disewa',
        'Kamera_disewa',
        'Jumlah_disewa',
        'ALamat_tujuan',
        
           
 ];

 public function customer()
  {
     return $this->belongsTo( Pembayaran::class, 'pembayaran_id');
 }

    public function pengembalian()
    {
        return $this->belongsToMany(Pengembalian::class);
    }
}

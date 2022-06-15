<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelola_Data_Pelanggan extends Model
{
    use HasFactory;
    protected $table='mengelola_data'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'Pemilik',
        'Admin',
        'Jumlah_pembelian',
        'Rating',
        'Data_Laporan',
           
 ];

 public function admin()
  {
     return $this->belongsToMany( Pembayaran::class, 'pembayaran_id');
 }

    public function pemilik()
    {
        return $this->belongsToMany(Pengembalian::class);
    }
}

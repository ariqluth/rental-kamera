<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;

    protected $table='alat'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'nama_alat',
        'kategori',
        'speksifikasi',
        'harga',
        'stok',
        'gambar',
        'pemilik',
        'kondisi'

    ];
//     public function detailalat() {
//        return $this->hasOne(Detail_Alat::class);
//    }
   public function pemilik() {
       return $this->belongsTo(Pemilik::class);
   }

   public function customer() {
    return $this->belongsTo(Customer::class);
}


   public function detail_kamera() {
    return $this->belongsTo(Detail_Alat::class);
}
   
   public function transaksi() {
    return $this->hasMany(Transaksi::class); //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa
    }
}

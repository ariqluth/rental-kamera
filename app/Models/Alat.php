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
        'pemilik',

    ];
//     public function detailalat() {
//        return $this->hasOne(Detail_Alat::class);
//    }
   public function pemilik() {
       return $this->belongsTo(Pemilik::class);
   }
}

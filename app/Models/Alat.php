<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;

    protected $table='alat'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Pemilik',
        'Nama_Alat',
        'Kategori',
        'Speksifikasi',
        'Harga',
        'Stok',

    ];
    public function detailalat() {
       return $this->hasOne(Detail_Alat::class);
   }
   public function pemilik() {
       return $this->belongsToMany(Pemilik::class , 'pemilik_id');
   }
}

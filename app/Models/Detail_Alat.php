<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Alat extends Model
{
    use HasFactory;

    protected $table ='detail_alat'; //mendefinisikan bahwa model ini terkait dengan tabel kelas
    protected $primaryKey = 'id'; //mendefinisikan bahwa primary key dari tabel kelas adalah id
   
    protected $fillable = [
        'kondisi_alat',
        
        
 ];

    public function alat() {
        return $this->belongsTo(Alat::class, 'id_alat'); //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa
    }
    public function penyewaan() {
        return $this->hasOne(Pembayaran::class); //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa
    }
}

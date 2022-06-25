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
        'sub_nama',
        
        
 ];

    public function alat() {
        return $this->hasOne(Alat::class); //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa
    }
    
}

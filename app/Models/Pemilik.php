<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model {
    use HasFactory;

    protected $table = 'users'; //mendefinisikan bahwa model ini terkait dengan tabel kelas
    protected $primaryKey = 'id'; //mendefinisikan bahwa primary key dari tabel kelas adalah id
    protected $fillable = [
        'name',
      
    ];
    
    public function alat() {
        return $this->hasMany(Alat::class); //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa
    }

}


?>
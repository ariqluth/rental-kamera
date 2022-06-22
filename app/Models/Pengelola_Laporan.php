<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelola_Laporan extends Model
{
    use HasFactory;

    protected $table='mengelola_laporan'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'customer',
        'pemilik',
        'admin',
        'pengembalian',
        'pengembalian',
        'bukti_laporan',
           
 ];

}

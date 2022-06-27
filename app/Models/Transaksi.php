<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table='pembayaran'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'id_customer',
        'id_pemilik',
        'alat_id',
        'reference',
        'merchant_ref',
        'bank_tujuan',
        'harga',
        'status',
    ];

    public function alat() {
        return $this->belongsTo(Alat::class); //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa
    }

    public function user(){
        return $this->belongsTo(User::class); //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa
    }

    public function pengambilan(){
        return $this->hasMany(Pengambilan::class); //mendefinisikan bahwa model ini terkait dengan tabel mahasiswa
    }
}

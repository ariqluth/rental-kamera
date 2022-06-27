<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengambilan extends Model
{
    use HasFactory;
    protected $table='pengambilan'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
    protected $fillable = [
        'id_bayar',
        'id_customer',
        'id_pemilik',
        'tanggal_pengambilan',
        
           
 ];

 public function transaksi()
  {
     return $this->belongsTo( Pembayaran::class);
 }

    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class);
    }

 
}

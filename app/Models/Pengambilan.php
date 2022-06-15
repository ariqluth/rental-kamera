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
        'Bukti_Pembayaran',
        'Customer',
        'Pemilik',
        'Admin',
        'tanggal_Pengambilan',
        
           
 ];

 public function pembayaran()
  {
     return $this->hasOne( Pembayaran::class, 'pembayaran_id');
 }

    public function pengembalian()
    {
        return $this->belongsToMany(Pengembalian::class);
    }
}

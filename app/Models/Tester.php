<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    use HasFactory;

    protected $table ='testers'; //mendefinisikan bahwa model ini terkait dengan tabel kelas
    protected $primaryKey = 'id'; //mendefinisikan bahwa primary key dari tabel kelas adalah id

    protected $fillable = [
        'nama',
        'email',
        'password',
        'created_at',
        'updated_at',
    ];
}

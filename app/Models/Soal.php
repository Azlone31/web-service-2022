<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $table = 'Soal';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    // protected $guarded = [];
    protected $fillable = ['nama_mk', 'dosen', 'jumlah_soal', 'keterangan'];

}

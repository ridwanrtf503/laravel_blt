<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_kk',
        'no_rek',
        'nama',
        'jenis_bantuan',
        'jumlah',
    ];
    protected $table ='masyarakat';
}

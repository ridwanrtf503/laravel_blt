<?php

namespace App\Models;

use App\Models\Masyarakat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penerima extends Model
{
    use HasFactory;
    protected $table = 'penerima';

    protected $fillable = [
        'masyarakat_id',
        'keterangan',
    ];
    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'masyarakat_id');
    }

}

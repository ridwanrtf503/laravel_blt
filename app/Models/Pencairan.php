<?php

namespace App\Models;

use App\Models\Penerima;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pencairan extends Model
{
    use HasFactory;
    protected $table = 'pencairan';
    protected $fillable = [
        'penerima_id',
        'tanggal_pencairan',
        'status',
    ];

    public function penerima()
    {
        return $this->belongsTo(Penerima::class);
    }
}

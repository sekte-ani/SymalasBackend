<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'waktu',
        'ruang',
        'kd_matkul',
    ];

    public function matkul(): BelongsTo
    {
        return $this->belongsTo(Matkul::class, 'kd_matkul', 'kd_matkul');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_matkul',
        'judul',
        'deskripsi',
        'tautan',
        'file',
    ];

    public function matkul(): BelongsTo
    {
        return $this->belongsTo(Matkul::class, 'kd_matkul', 'kd_matkul');
    }
}

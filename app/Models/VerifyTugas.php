<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VerifyTugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'npm',
        'kd_matkul',
        'status',
    ];

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class, 'npm', 'npm');
    }
    public function matkul(): BelongsTo
    {
        return $this->belongsTo(Matkul::class, 'kd_matkul', 'kd_matkul');
    }
}

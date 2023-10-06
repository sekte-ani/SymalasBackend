<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matkul extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_matkul',
        'nama_matkul',
        'nip',
    ];

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'nip', 'nip');
    }
}

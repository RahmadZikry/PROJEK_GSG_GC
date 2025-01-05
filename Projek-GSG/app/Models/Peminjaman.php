<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    /** @use HasFactory<\Database\Factories\PeminjamanFactory> */
    use HasFactory;
    protected $table = 'peminjaman';

    protected $guarded = [];

 /**
     * Get all of the comments for the Fasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peminjaman(): HasMany
    {
        return $this->hasMany(peminjaman::class, 'foreign_key', 'local_key');
    }

    public function FormPeminjaman(): BelongsTo
    {
        return $this->BelongsTo(Pembayaran::class, 'foreign_key', 'local_key');
    }

    public function pembayaran(): BelongsTo
    {
        return $this->BelongsTo(Pembayaran::class, 'foreign_key', 'local_key');
    }



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}

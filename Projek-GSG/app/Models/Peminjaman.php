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

    // Tetapkan nama tabel secara eksplisit
    protected $table = 'peminjaman';

    // Tambahkan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'fasilitas_id',
        'user_id',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'metode_pembayaran',
        'bukti_pembayaran',
        'status_verifikasi',
    ];

 /**
     * Get all of the comments for the Fasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peminjaman(): HasMany
    {
        return $this->hasMany(peminjaman::class, 'foreign_key', 'local_key');
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
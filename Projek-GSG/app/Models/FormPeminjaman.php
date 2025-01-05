<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormPeminjaman extends Model
{
    /** @use HasFactory<\Database\Factories\FormPeminjamanFactory> */
    use HasFactory;

    protected $guarded = [];

 /**
     * Get all of the comments for the Fasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function frompeminjaman(): HasMany
    {
        return $this->hasMany(FormPeminjaman::class, 'foreign_key', 'local_key');
    }

    /**
     * Get the user that owns the Fasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }

    public function peminjaman(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
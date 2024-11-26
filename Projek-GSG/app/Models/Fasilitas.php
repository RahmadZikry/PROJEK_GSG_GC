<?php

namespace App\Models;

use Database\Seeders\FasilitasSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitas extends Model
{
    /** @use HasFactory<\Database\Factories\FasilitasFactory> */
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the comments for the Fasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fasilitas(): HasMany
    {
        return $this->hasMany(Fasilitas::class, 'foreign_key', 'local_key');
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
}

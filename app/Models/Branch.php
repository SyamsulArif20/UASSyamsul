<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'branches';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = ['name', 'location'];

    // Relasi dengan model Transaction
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara eksplisit
    protected $table = 'medicines';

    // Mendaftarkan kolom yang boleh diisi massal
    protected $fillable = [
        'name',
        'category',
        'code',
        'expired_at',
        'price',
        'stock',
        'is_prescription_required',
        'description'
    ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bentuk extends Model
{
    use HasFactory;
    protected $table = 'bentuks';
    protected $fillable = [
        'kode_bentuk',
        'bentuk_obat'
    ];
}

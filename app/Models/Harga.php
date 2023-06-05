<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Harga extends Model
{
    use HasFactory;
    protected $table = 'hargas';
    protected $fillable = [
        'nama_obat',
        'harga_obat'
    ];

    public static function Join(){
        $data = DB::table('hargas')
        ->join('obats', 'hargas.nama_obat', 'obats.id')
        ->select('hargas.*', 'obats.namaobat as nama_obat')
        ->get();

        return $data;
    }
}

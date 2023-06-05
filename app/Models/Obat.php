<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obats';
    protected $fillable = [
        'kode',
        'namaobat',
        'dosis',
        'efek',
        'kategori',
        'jenis_obat'
    ];

    public static function Join() {
        $data = DB::table('obats')
            ->join('jenis', 'obats.jenis_obat', 'jenis.id')//di joinin dengan tabel jenis, jenis obat yg ada di tabel obats akan memiliki nilai yg sama kyk id jenis, karena mereka berdua digabungin
            ->join('bentuks', 'obats.kategori', 'bentuks.id')//
            ->select('obats.*', 'jenis.jenis_obat as jenis_obat', 'bentuks.bentuk_obat as bentuk')//buat nambil data, ambil semua data obat, ngambil di tabel jenis tu jenis obatnya terus di deklarasiin sbg jenis obat, ngambil ditabel bentuk itu bentuk obatnya terus dideklarasikan sbg bentuk.
            ->get();

        return $data;
    }
}
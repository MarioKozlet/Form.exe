<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'nama',
        'email',
        'nip',
        'nip1',
        'deskripsi',
        'jenis',
        'email',
        'harga',
        'peristiwa',
        'tgl',
        'lokasi',
        'gratifikasi',
        'image',
        'namalengkap',
        'namalengkap1',
        'jabatan',
        'pangkat',
        'bagian',
        'jabatan1',
        'pangkat1',
        'bagian1',
        'bentukpoten'
    ];
    protected $table = 'forms';
}

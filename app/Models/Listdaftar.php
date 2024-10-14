<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listdaftar extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi penamaan tabel Laravel
    protected $table = 'list_daftar';

    protected $fillable = [
        'id_athlete',
        'username',
        'firstname',
        'lastname',
        'refresh_token',
        'access_token',
        'foto_profil',
        'area',
        'grup',
        'warna',
        'tgl_register',
    ];

    // Jika tidak menggunakan timestamps default dari Laravel, bisa diatur seperti ini
    // public $timestamps = true;
    public $timestamps = false;
}

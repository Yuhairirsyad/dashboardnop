<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datachallenges extends Model
{
    use HasFactory;

    protected $table = 'data_challenges';

    protected $fillable = [
        'id',									
        'id_athlete',
        'id_kegiatan',
        'kegiatan',
        'distance',
        'kalori',
        'waktu',
        'tipe',
        'tanggal_kegiatan',
        'tanggal_ambil'
    ];

    public $timestamps = false; 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;

    protected $table = 'grup_challenges';

    protected $fillable = [
        'area',
        'grup',
        'foto'
    ];
}

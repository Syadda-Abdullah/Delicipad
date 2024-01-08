<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_menu',
        'nama_menu',
        'jenis_menu' => 'string',
        'deskripsi',
        'info',
        'harga',
        'foto'
    ];
}

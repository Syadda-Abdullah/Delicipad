<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false;
    protected $fillable = [
        "id_transaksi",
        "id_user",
        "id_menu"
    ];
}

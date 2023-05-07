<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket_penjualan extends Model
{
    protected $table = "paket_penjualan";
    protected $primaryKey = "id_paket";
    protected $fillable = ["id_paket", "nama_paket"];
}

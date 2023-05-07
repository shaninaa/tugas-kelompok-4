<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket_penjualan_barang extends Model
{
    protected $table = "paket_penjualan_barang";
    protected $primaryKey = ["id_paket","id_barang"];
    protected $fillable = ["id_paket", "nama_paket","id_barang","nama_barang"];
}
    
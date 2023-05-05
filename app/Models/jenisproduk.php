<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisproduk extends Model
{
    use HasFactory;
    protected $primarykey = 'id_jenis';
    protected $table = 'jenisproduks';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hakakses extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_akses';
    protected $table = 'hak_akses';
}

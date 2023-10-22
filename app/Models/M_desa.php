<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_desa extends Model
{
    use softDeletes;
    protected $table = "desa";
    protected $fillable = [
        'nama_kk',
        'alalmat',
        'jumlah_kk',
    ];
    protected $hidden;
}

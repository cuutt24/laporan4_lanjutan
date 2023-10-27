<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penduduk extends Model
{
    use softDeletes;
    protected $table = "penduduk";
    protected $fillable = [
        '',
    ];
    protected $hidden;
    public function desa()
    {
        return $this->belongsTo(M_desa::class);
    }
}



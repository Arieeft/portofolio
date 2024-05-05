<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edukasi extends Model
{
    public $table = "edukasis";
    protected $fillable = [
        'sekolah',
        'jurusan',
        'tahun'
    ];

    protected $guarded=[
        'id',
    ];
}

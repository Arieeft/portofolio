<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $fillable = [
        'perusahaan',
        'pekerjaan',
        'tahun',
        'deskripsi'
    ];
}

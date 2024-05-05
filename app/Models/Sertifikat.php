<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    public $table = "sertifikats";
    protected $fillable = [
        'sertifikat'
    ];

    protected $guarded=[
        'id',
    ];
    use HasFactory;
}

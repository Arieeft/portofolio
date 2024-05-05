<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $table = "skills";
    protected $fillable = [
        'skill'
    ];

    protected $guarded=[
        'id',
    ];
}

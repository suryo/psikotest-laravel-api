<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vis_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik', 'password'
    ];

}

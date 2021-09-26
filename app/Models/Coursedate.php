<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursedate extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'scheduled_date' => 'datetime'
    ];
}

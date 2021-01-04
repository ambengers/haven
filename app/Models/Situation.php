<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Situation extends Haven
{
    use HasFactory;

    const OPEN = 'open';
    const close = 'close';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Situation extends Haven
{
    use HasFactory;

    const OPEN = 'open';
    const CLOSED = 'closed';

    const FLOOD = 'flood';
    const TYPHOON = 'typhoon';
    const FIRE = 'fire';
    const EARTHQUAKE = 'earthquake';

    public static function types()
    {
        return [
            self::FLOOD,
            self::TYPHOON,
            self::FIRE,
            self::EARTHQUAKE,
        ];
    }
}

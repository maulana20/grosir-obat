<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    public static $statics = [
        'type' = [
            'C' => 'Closing',
            'P' => 'Posting',
            'A' => 'Open',
        ]
    ];
}

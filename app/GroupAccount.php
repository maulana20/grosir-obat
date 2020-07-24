<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupAccount extends Model
{
    protected $table = 'group_account';
    
    // note : BS => Balance Sheet
    public static $statics = [
        'type' => [
            'BS1' => 'Aktiva',
            'BS2' => 'Passiva',
        ]
    ];
}

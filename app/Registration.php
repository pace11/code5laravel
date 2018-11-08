<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table    = 'registration';
    protected $fillable = [
        'id_reg', 
        'name', 
        'email', 
        'phone', 
        'type_ta', 
        'desc_ta', 
        'desc_method',
        'organization',
        'desc_apps',
        'school',
        'campus',
        'nim'
    ];

    public $timestamps = false;
}

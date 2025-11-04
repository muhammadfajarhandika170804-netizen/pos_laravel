<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //
    // elequent: Object Relaction Mapping
    // Query Builder:
    //select * from settings
    // insert into settings (phone_number, address) values ()
    protected $fillable = [
        'app_name',
        'phone_number',
        'address'
    ];
}

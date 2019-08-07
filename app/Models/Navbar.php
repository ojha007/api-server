<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $table='navbars';
     public $timestamps=false;
    public $fillable=[
        'name',
        'slug',
        'parent_id',
        'display_order',
    ];

}

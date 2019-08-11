<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $table = 'navbars';

    public $timestamps = false;

    public $fillable = [
        'name',
        'slug',
        'parent_id',
        'display_order',
    ];

    public function parent()
    {
        return $this->belongsTo(Navbar::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Navbar::class, 'parent_id', 'id');
    }

    public  function tree()
    {
       return $this->where('parent_id', '=', 0)->orderBy('display_order','asc')->with(['children','parent'])->get();

    }

}

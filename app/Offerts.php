<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offerts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'admin_name', 'title',
    ];
}

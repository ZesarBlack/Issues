<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Proyecto extends Model
{
    public $timestamps = false;
    protected $fillable=
    [
      'nombre',
    ];
}

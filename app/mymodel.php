<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mymodel extends Model
{
    protected $table='mytable';

    protected $hidden=['created_at','updated_at'];

    protected $fillable= ['username','email'];

}
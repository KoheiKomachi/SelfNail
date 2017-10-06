<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    //
    protected $table = 'designs';
    
    protected $fillable = ['name', 'description', 'material', 'color'];
}
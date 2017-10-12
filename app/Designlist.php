<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designlist extends Model
{
    //
    protected $table = 'designlist';
    
    protected $fillable = ['name', 'description', 'description', 'image'];
}
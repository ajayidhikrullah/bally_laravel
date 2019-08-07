<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	//
	 // this is our parent class that all other elequent will take from
    // protected $fillable = ['title', 'category'];
    protected $guarded = [];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
    			'image',
       			'name',
	    		'description',
	    		'is_deleted',
	    		'created_at',
	    		'updated_at',
    ];
}

<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
    			'banner_image',
                'cover_image',
       			'name',
	    		'description',
	    		'is_deleted',
	    		'created_at',
	    		'updated_at',
    ];
}

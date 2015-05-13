<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    // set fields that can be mass-assigned (fields user can edit)
	protected $fillable = [
        'title',
		'url',
		'alt'
    	];

}

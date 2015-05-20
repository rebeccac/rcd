<?php namespace App\models;
use Eloquent; // ******** This Line *********
use DB;

    class Photo extends Eloquent
    {
        // set fields that can be mass-assigned (fields user can edit)
	protected $fillable = [
		'url',
		'title',
		'alt',
		'description',
        'width',
        'height',
        'type'
	];
    }

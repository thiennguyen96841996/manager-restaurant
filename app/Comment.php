<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
	    'name',
	    'email',
	    'phone',
	    'content',
	    'post_id',
	    'post_type',
    ];

    public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public function post()
	{
		return $this->morphTo();
	}
}

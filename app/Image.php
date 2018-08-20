<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
	protected $fillable = [
	    'name',
	    'product_id',
    ];

	use SoftDeletes;
	
    public function products() {
    	return $this->belongsTo(Product::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;

class Category extends Model
{
	use SoftDeletes;
	protected $fillable = [
	    'name'
    ];
    protected $guarded = ['id'];

    public function products() {
    	return $this->hasMany(Product::class);
    }
}

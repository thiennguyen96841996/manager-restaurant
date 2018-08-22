<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
	protected $fillable = [
	    'name',
	    'price',
	    'describe',
        'category_id',
    ];
    protected $guarded = ['id'];

    public function category() {
    	return $this->belongsTo(Category::class);
    }

    public function images() {
    	return $this->hasMany(Image::class);
    }

    public function getImage($id) {
        $image = Image::where('product_id', $id)->first();

        return $image;
    }

    public function comments() {
        return $this->morphMany('App\Comment', 'post');
    }
}

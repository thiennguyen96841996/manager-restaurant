<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'type',
        'read',
        'click',
        'type_id',
    ];
}

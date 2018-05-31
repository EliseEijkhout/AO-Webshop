<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Model
{
    protected $table = 'producten';

    	public function categories(){

		return $this->belongsToMany('App\Category','product_category','product_id');
	}
}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Model
{
    protected $table = 'products';

    public function categories(){

		return $this->belongsToMany('App\Category');
	}

}

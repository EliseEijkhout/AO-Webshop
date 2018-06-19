<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class Category extends Model
{
	protected $table = 'category';

	public function products(){

		return $this->belongsToMany('App\Product','product_category','category_id');
	}
}

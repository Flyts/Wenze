<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{ 
	protected $fillable = [
        'stock',
    ];

    
    /*public function getPrice()
    {
    	$price = $this->price / 100;

    	return number_format($price, 2, ',', ' '). ' $';
    } */


    public function categories()
    {
    	return $this->belongsToMany('App\Models\Categorys');
    }
}

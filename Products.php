<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public function ReviewRating()
    {
    	return $this->hasMany('App\Models\Ratings','post_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $guarded = [];
    
    public function tutorials()
    {
        return $this->hasMany(Tutorial::class);
    }
}

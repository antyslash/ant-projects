<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $guarded = [];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}

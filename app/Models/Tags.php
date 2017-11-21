<?php

namespace blog\Models;

use Illuminate\Database\Eloquent\Model;
use blog\Models\Posts;

class Tags extends Model
{
    protected $fillable=[
        'nome'
    ];

    public function posts(){
        return $this->belongsToMany(Posts::class);
    }
}

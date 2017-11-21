<?php

namespace blog\Models;

use Illuminate\Database\Eloquent\Model;
use blog\Models\Posts;

class Comentarios extends Model
{
    protected $fillable=[
        'post_id',
        'nome',
        'email',
        'comentario',
    ];

    public function posts(){
        return $this->belongsTo(Posts::class);
    }
}

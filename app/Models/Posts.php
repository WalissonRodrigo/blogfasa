<?php

namespace blog\Models;

use Illuminate\Database\Eloquent\Model;
use blog\Models\Comentarios;
use blog\Tags;

class Posts extends Model
{
    protected $fillable=[
      'titulo',
      'conteudo'
    ];

    public function comentarios(){
        return $this->hasMany(Comentarios::class);
    }

    public function tags(){
        return $this->belongsToMany(Tags::class, 'posts_tags');
    }
}

<?php

namespace blog\Models;

use Illuminate\Database\Eloquent\Model;
use blog\Models\Comentarios;
use blog\Models\Tags;
use blog\Models\User;

class Posts extends Model
{
    protected $dates = ['deleted_at'];
    
    protected $fillable=[
      'titulo',
      'conteudo',
      'user_id'
    ];

    public function comentarios(){
        return $this->hasMany(Comentarios::class);
    }

    public function tags(){
        return $this->belongsToMany(Tags::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}

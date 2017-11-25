<?php

namespace blog\Models;

use Illuminate\Database\Eloquent\Model;
use blog\Models\Role;
use blog\Models\User;

class Permission extends Model
{
    protected $table    = 'permissions';
    
    protected $fillable = ['name','label'];
    
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

<?php

namespace blog\Models;

use Illuminate\Database\Eloquent\Model;
use blog\Models\Permission;
use blog\Models\User;

class Role extends Model
{
    protected $table    = 'roles';
    
    protected $fillable = ['name','label'];
    
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

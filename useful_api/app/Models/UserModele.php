<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModele extends Model
{
    protected $fillable = [
        'user_id',
        'module_id',
    ];

    
    protected $with = [
        'user',
        'module',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function comments(){
        return $this->hasMany(Module::class);
    }

}

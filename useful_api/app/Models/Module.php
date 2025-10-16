<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Module extends Model
{
    use HasFactory, HasApiTokens;

   protected $fillable = [
        'user_id',
        'id',
        'name',
        'description',
    ];

    
    public function user(){
        return $this->belongsTo(User::class);
    }
}

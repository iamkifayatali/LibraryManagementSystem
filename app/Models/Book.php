<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'auther_name',
        'Detail',
        


    ];
    protected $hidden = [
        'user_id',
        
    ];
    public function users()
    {
        return $this->belongsTo("App\models\User");
    }
}

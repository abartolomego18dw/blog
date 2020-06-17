<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
        // return $this->HasOne(User::class);
        return $this->belongsToMany(User::class);
    }
}

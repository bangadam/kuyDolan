<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $guarded = ['id'];

    public function user() {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}

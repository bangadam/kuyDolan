<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $guarded = ['id'];

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function gallery() {
        return $this->hasOne(GalleryPlaces::class, 'places_id', 'id');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}

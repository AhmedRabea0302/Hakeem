<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeStatic extends Model
{
    protected $fillable = ['image_name'];
    public function getDetails() {
        return $this->hasMany('App\HomeStaticDetail', 'master_id', 'id');
    }
}

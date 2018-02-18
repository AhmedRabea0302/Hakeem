<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerStatic extends Model
{
    protected $fillable = ['image_name'];
    public function getDetails() {
        return $this->hasMany('App\CareerStaticDetail', 'master_id', 'id');
    }
}

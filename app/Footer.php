<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = ['image_name'];

    public function getDetails() {
        return $this->hasMany('App\FooterDetail', 'master_id', 'id');
    }
}

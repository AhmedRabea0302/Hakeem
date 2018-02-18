<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected  $fillable = ['image_name'];
    public function getDetails() {
        return $this->hasMany('App\PartnerDetail', 'master_id', 'id');
    }
}

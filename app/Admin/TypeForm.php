<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class TypeForm extends Model
{
    protected $fillable = ["type"];

    public function subTypes(){
         return $this->hasMany('App\Admin\SubTypeForm');
    }
}

<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class SubTypeForm extends Model
{
    public function Types(){
         return $this->belongsTo('App\Admin\TypeForm');
    }
}

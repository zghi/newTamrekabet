<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SirketTuru extends Model
{
    public $timestamps = false;
    
    protected $table = 'sirket_turleri';


    public function firmalar()
    {
        return $this->hasMany('App\Firma', 'tur_id', 'id');
    }
}

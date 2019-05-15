<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';
    public $timestamps = false;

    public function jurusan()
    {
        return $this->hasMany('App\Jurusan','fakultas_id');
    }
}

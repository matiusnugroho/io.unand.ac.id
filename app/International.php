<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class International extends Model
{
    protected $table = 'internationals';
    public $timestamps = false;

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
    
}

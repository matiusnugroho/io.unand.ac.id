<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    public $timestamps =false;

    protected $fillable =['nama','gender','tgl_lahir','address','marital_status','telp','user_id'];
    
    public function international()
    {
        return $this->hasOne('App\International','mahasiswa_id');
    }
}

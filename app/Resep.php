<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'reseps';
    protected $fillable = ['name', 'writter'];
    public function resepdetail()
    {
        return $this->hasMany('App\Resepdetail');
    }

    public function make()
    {
        return $this->hasMany('App\Make');
    }
}

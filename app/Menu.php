<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
	protected $table = "menu";

    public function user()
    {
        return $this->belongsToMany('App\User','phanquyen');
        //return $this->belongsToMany('App\User')->using('App\PhanQuyen');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanQuyen extends Model
{
    //
    protected $table = "phanquyen";

    protected $fillable = [
        'menu_id','nv_id', 'q_xem', 'q_them','q_sua','q_xoa','p_in'
    ];
}

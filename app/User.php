<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "nhansu.dm_nhanvien_tb";
    protected $fillable = [
        'id','ten', 'email', 'password','username'
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function menu()
    {
        return $this->belongsToMany('App\Menu','phanquyen','nv_id','menu_id')->withPivot('q_xem','q_them','q_sua','q_sua','q_xoa','q_in');
    }


}

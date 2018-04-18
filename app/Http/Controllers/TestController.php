<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    
    public function test()
    {
        $user=DB::select('select * FROM dm_nhanvien_tb');
        var_dump($user);
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }  

    public function login(Request $request)
    {
        $field=filter_var($request->input('username'),FILTER_VALIDATE_EMAIL)?'email':'username';       

        $checklogin=[
                $field => $request->username, 'password' =>$request->password
        ];
        if (Auth::attempt($checklogin)) {
            // Authentication passed...
            $nv=Auth::user();
            if ($nv->nv_admin==1 || $nv->nv_admin==2)
                return redirect()->intended('admin/dashboard');
            else return redirect()->intended('/home');
            
            
        }
        else
        {
            return "đăng nhập lỗi";
        }
    }  
}

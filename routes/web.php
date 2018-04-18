<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Database\Query\Builder;

/*Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
	Route::get('dashboard', ['as'=>'admin.index','uses'=>'AdminController@index']);
});*/
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
	Route::get('dashboard', ['as'=>'admin.index','uses'=>'AdminController@index']);
});




/*Route::get('/login', 'Auth\LoginController');

Route::post('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/register', 'Auth\RegisterController@create');

Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');

Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');


$this->post('password/reset', 'Auth\PasswordController@reset');*/
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('quanhe/one-many-1', function (){
	//$data=Auth->menu()->get()->toArray();
	$data=Auth::user();
	//Session::put('menu', $data);
	//dd($data);

	foreach ($data->menu as $menu) {
    echo $menu;
	}
	/*echo "<pre>";
	print_r($data);
	echo "</pre>";*/
	//$products = Product::hydrate(Session::get('products'));
});

Route::get('quanhe/one-many-2', function (){
	$data=App\Menu::find(1)->user()->get()->toArray();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});

Route::get('/test','TestController@test');

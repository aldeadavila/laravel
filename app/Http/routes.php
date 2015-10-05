<?php

use App\imovel;
use App\foto;

//Route::controller('imovels', 'ImovelsController', $config);
/*Route::resource('imovel', 'ImovelsController',
   ['names' => ['store' => 'imovel-criar']]);
*/
Route::get('imoveis', 'ImovelsController@index');
Route::get('imoveis/create', 'ImovelsController@create');
Route::get('imoveis/{id}', 'ImovelsController@show');
Route::post('imoveis', 'ImovelsController@store');


Route::get('/home', function()

{
		//numero de inmuebles totales App\Imovel::get()->count();
	 // un inmueble aleatorio App\Imovel::all()->random();
	  // 3 inmuebles aleatorios  $elegidos = App\Imovel::all()->random(3);


    $imove = App\Imovel::all()->random(3);
    
    $keys = $imove->keys();
    $imovel1 = App\Imovel::find($keys[0]);
    $imovel2 = App\Imovel::find($keys[1]);
    $imovel3 = App\Imovel::find($keys[2]);
    $imoveis = collect([$imovel1,$imovel2,$imovel3]);

    $fotos = Foto::where('imovel_id', '=', '1')->get();


    $imoveis = $imoveis->values();
    
    $caracteristicas0 = $imoveis[0]->caracteristicas;
    return view('pages.home', ['title' => 'Imobiliaria J.Lima - Principal',
     'imoveis' => $imoveis,
     'fotos' => $fotos,
     'caracteristicas' => $caracteristicas0,
     'keys' => $keys,
      ]);
});
Route::get('/about', function()
{
    return View::make('pages.about');
});
Route::get('/projects', function()
{
    return View::make('pages.projects');
});
Route::get('/contact', function()
{
    return View::make('pages.contact');
});

// Authentication routes...
Route::get('auth/login', ['as' =>'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
// Registration routes...
Route::get('auth/register', ['as' =>'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', ['as' =>'register', 'uses' => 'Auth\AuthController@postRegister']);
// Password reset link request routes...
Route::get('auth/forgot', ['as' =>'password/email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('auth/forgot', ['as' =>'password/email', 'uses' => 'Auth\PasswordController@postEmail']);
// Password reset routes...
Route::get('auth/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('auth/password/reset', 'Auth\PasswordController@postReset');
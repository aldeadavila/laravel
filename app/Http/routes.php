<?php

use App\imovel;

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
    $imoveis = Imovel::where('cidade','Embu das Artes')->where('negocio', 'venda')->get();
    return view('pages.home', ['title' => 'Imobiliaria J.Lima - Principal'])->with(compact('imoveis'));
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
<?php

//Route::controller('imovels', 'ImovelsController', $config);
Route::resource('imovels', 'ImovelsController',
   ['names' => ['create' => 'imovels-criar']]);

//Route::get('/imovels', 'ImovelsController@index');

Route::get('/', function()
{
    $imoveis = \App\imovel::all();
    return view('pages.home')->with(compact('imoveis'));
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
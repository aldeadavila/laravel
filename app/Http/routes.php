<?php
/*
Imovels
*/
$config = [
   'getIndex' => 'imovel.index',
   'getCriar' => 'imovel.create',
   'getEditar' => 'imovel.edit',
   'getSalvar' => 'imovel.store',
   'getAtualizar' => 'imovel.update',
   'getRemover' => 'imovel.destroy',
];

//Route::controller('imovels', 'ImovelsController', $config);
Route::resource('imovels', 'ImovelsController',
   ['names' => ['create' => 'imovels-criar']]);

//Route::get('/imovels', 'ImovelsController@index');

Route::get('/', function()
{
    return View::make('pages.home');
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
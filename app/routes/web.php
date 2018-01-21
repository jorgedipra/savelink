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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/contact', function () {
    return 'texto';
});

Route::get('prueba', function () {
	$a1=[
		[
			'title' => 'titulo 1',
			'body'  => 'ruta 2'
		],
		[
			'title' => 'titulo 1.1',
			'body'  => 'ruta 1.2',
		]
	];
     return view('prueba',['a1' => $a1]);
});

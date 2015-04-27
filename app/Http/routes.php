<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
    include public_path().'/home.html';
});
/*
Route::get('/', function()
{
    include public_path().'/under/under.html';
});
*/
Route::get('/register', function()
{
    return view('register');
});

Route::get('/likelist', function()
{
    return view('likelist');
});

Route::get('/menu', function()
{
    return view('menu');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
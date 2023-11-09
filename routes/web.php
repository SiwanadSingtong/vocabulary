<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'HomeController@index');

// Route::get('quiz/{id}', 'HomeController@quiz');

Route::get('/', 'PagesController@index');
Route::get('/detail', 'PagesController@detail');
Route::get('/quiz', 'PagesController@quiz');

Route::get('/classcreate', 'ClassesController@create');
Route::post('/classstore', 'ClassesController@store');

Route::get('/classdetails/{id}', 'ClassesController@index')->name('classdetails');

Route::get('/quiz/{id}/{cid}', 'QuizzesController@index')->name('classquiz');
Route::post('/quizstore/{wid}', 'QuizzesController@store');

Route::get('/login', 'PagesController@login');

Route::get('/workcreate/{cid}', 'WorkController@index')->name('workcreate');
Route::post('/workstore/{cid}', 'WorkController@store');
Route::get('/workdelete/{id}', 'ClassesController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaire/create','QuestionnaireController@create');
Route::post('/questionnaire','QuestionnaireController@store');
Route::get('/questionnaire/{questionnaire}','QuestionnaireController@show');
Route::get('/questionnaire/{questionnaire}/questions/create','QuestionController@create');
Route::post('/questionnaire/{questionnaire}/questions','QuestionController@store');
Route::delete('/questionnaire/{questionnaire}/questions/{question}', 'QuestionController@destroy');
Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@show');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');
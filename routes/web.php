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


                 // Questionnair Controller
Route::get('/questionnair/create','QuestionnairController@create');
Route::post('/questionnair','QuestionnairController@store');
Route::get('/questionnair/{questionnair}','QuestionnairController@show');


                // Question Controller
Route::get('/questionnairs/{questionnair}/questions/create','QuestionController@create');
Route::post('/questionnairs/{questionnair}/questions','QuestionController@store');
Route::delete('/questionnairs/{questionnair}/questions/{question}','QuestionController@destroy');


Route::get('/serveys/{questionnair}','SurveyController@create');
Route::post('/serveys/{questionnair}','SurveyController@store');



             



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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('survey', 'SurveyController');
Route::get('get/closed', 'SurveyController@closed');
Route::get('survey/{survey}/open', 'SurveyController@open');
Route::get('survey/{survey}/close', 'SurveyController@close');
Route::get('survey/{survey}/manage-questions', 'SurveyController@manageQuestions');
Route::get('survey/{survey}/question', 'SurveyController@showQuesttionPage');
Route::post('survey/{survey}/question', 'SurveyController@saveSurveyQuestion');


Route::resource('survey-question', 'SurveyQuestionController');
Route::resource('respondent-response', 'RespondentResponseController');

Route::get('rewards', 'RewardController@index');
Route::get('rewards/paid', 'RewardController@paid');
Route::post('rewards', 'RewardController@pay');
Route::resource('respondents', 'SurveyRespondentController');

Route::get('/update-user', 'UserController@showEdit');
Route::post('/update-user/{user}', 'UserController@saveData');
Route::get('/update-password', 'UserController@showPasswordEdit');
Route::post('/update-password/{user}', 'UserController@updatePassword');
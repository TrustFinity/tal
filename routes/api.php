<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'namespace' => 'Api\v1',
    'prefix'=>'/v1'
], function() {
	Route::get('/all-surveys', 'SurveyApiController@getAnswered');
	Route::get('/get-for-user', 'SurveyApiController@getNew');
	Route::get('/get-profile', 'SurveyApiController@getProfile');
	Route::get('/get-survey-question/{survey}', 'SurveyApiController@getSurveyQuestions');
	Route::post('/answer/{survey}', 'SurveyApiController@answerSurvey');
	Route::post('/new-respondent', 'SurveyApiController@createNewRespondent');
});

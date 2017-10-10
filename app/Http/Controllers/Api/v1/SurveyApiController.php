<?php

namespace App\Http\Controllers\Api\v1;;

use Illuminate\Http\Request;
use App\Models\Surveys\Survey;
use App\Models\Questions\SurveyQuestion;
use App\Models\Respondents\SurveyRespondent;
use App\Models\Responses\RespondentResponse;

class SurveyApiController
{

	public function getAll()
	{
		return RespondentResponse::with('survey')
								 ->with('survey_question')
								 ->with('respondent')
								 ->orderBy('id', 'desc')
								 ->get();
	}

	public function getForUser(Request $request)
	{
		return RespondentResponse::with('survey')
								 ->with('survey_question')
								 ->with('respondent')
								 ->where('survey_respondent_id', $request->respondent_id)
								 ->orderBy('id', 'desc')
								 ->get();
	}

	public function getSurveyQuestions(Survey $survey)
	{
		return SurveyQuestion::with('responses')
							 ->where('survey_id', $survey->id)
							 ->get();
	}

	public function answerSurvey(Survey $survey, Request $request)
	{
		return $request->all();
	}

	public function getProfile(Request $request)
	{
		return SurveyRespondent::where('facebook_id', $request->facebook_id)->first();
	}

	public function createNewRespondent(Request $request)
	{
		return SurveyRespondent::create($request->all());
	}

	public function updateRespondentData(Request $request)
	{
		$respondent = SurveyRespondent::where('facebook_id', $request->facebook_id)->first();
		if (!$respondent->update($request->all())) {
			return "Failed to update.";
		}
		return $respondent;
	}
}

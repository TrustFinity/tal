<?php

namespace App\Http\Controllers\Api\v1;;

use Illuminate\Http\Request;
use App\Models\Surveys\Survey;
use App\Models\Questions\SurveyQuestion;
use App\Models\Respondents\SurveyRespondent;
use App\Models\Responses\RespondentResponse;

class SurveyApiController
{

	public function getAnswered(Request $request)
	{
		return RespondentResponse::with('survey')
								 // ->whereIn('facebook_id', [$request->facebook_id])
								 ->orderBy('id', 'desc')
								 ->get();
	}

	public function getNew(Request $request)
	{
		return RespondentResponse::with('survey')
								 ->with('survey_question')
								 ->where('is_open', true)
								 // ->whereNotIn('facebook_id', [$request->facebook_id])
								 // ->whereNotIn('the survey filters)
								 ->orderBy('id', 'desc')
								 ->get();
	}

	public function getSurveyQuestions(Request $survey)
	{
		return SurveyQuestion::with('survey')
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

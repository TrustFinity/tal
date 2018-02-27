<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Models\Surveys\Survey;
use App\Models\Questions\SurveyQuestion;
use App\Models\Respondents\SurveyRespondent;
use App\Models\Responses\RespondentResponse;

class SurveyApiController
{
	public function getAnswered(Request $request)
	{
		$facebook_id = $request->facebook_id;
		
		// $respondent_response = RespondentResponse::whereIn('facebook_id', [$facebook_id])
		// 	->with('survey')
		// 	->distinct()
		// 	->get();
		$surveys = Survey::whereHas('survey_questions', function($q) use ($facebook_id) {
			$q->whereHas('respondents_response', function($q) use ($facebook_id) {
				$q->where('facebook_id', $facebook_id);
			});
		})->get();

		return $surveys;
	}

	public function getNew(Request $request)
	{
		$facebook_id = $request->facebook_id;
		
		// $respondent_response = RespondentResponse::whereNotIn('facebook_id', [$facebook_id])
		// 	->with('survey.survey_questions.responses')
		// 	->distinct()
		// 	->get();
		
		$surveys = Survey::whereHas('survey_questions', function($q) use ($facebook_id) {
						$q->whereHas('respondents_response', function($q) use ($facebook_id) {
							$q->where('facebook_id', '!=', $facebook_id);
						});
					})->with('survey_questions.responses')
					  ->get();

		$doesnt_have = Survey::whereHas('survey_questions', function($q) use ($facebook_id) {
							$q->doesntHave('respondents_response');
						})->with('survey_questions.responses')
						  ->get();

		$surveys = $surveys->merge($doesnt_have);

		return $surveys;
	}

	public function getSurveyQuestions(Survey $survey)
	{
		return SurveyQuestion::where('survey_id', $survey->id)
							 ->with('responses')
							 ->get();			
	}

	public function answerSurvey(Survey $survey, SurveyQuestion $survey_question, Request $request)
	{
		$respondent_response            = RespondentResponse::make($request->all());
		$respondent_response->survey_id = $survey->id;
		$respondent_response->survey_question_id   = $survey_question->id;

		$respondents_id = SurveyRespondent::where('facebook_id', $respondent_response->facebook_id)
																	 ->first()
																	 ->id;
		$respondent_response->survey_respondent_id = $respondents_id;

		if (!$respondent_response->save()) {
			return 'Failed to record response. Try again';
		}
		return 'Recorded successfully';
	}

	public function getProfile(Request $request)
	{
		return SurveyRespondent::where('facebook_id', $request->facebook_id)->first();
	}

	public function createNewRespondent(Request $request)
	{
		return SurveyRespondent::firstOrCreate(["facebook_id" => $request->facebook_id], $request->all());
	}

	public function updateRespondentData(Request $request)
	{
		// May used updateOrCreate.
		$respondent = SurveyRespondent::where('facebook_id', $request->facebook_id)->first();
		if (!$respondent->update($request->all())) {
			return "Failed to update.";
		}
		return $respondent;
	}
}

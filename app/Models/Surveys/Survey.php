<?php

namespace App\Models\Surveys;

use Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questions\SurveyQuestion;
use App\Modesls\Respondents\SurveyRespondent;

class Survey extends Model
{
	protected $fillable = [
		'name',
		'description'
	];

	public static function make(array $params)
	{
		$survey = new Survey($params);
		$survey->user_id = Auth::user()->id;
		return $survey;
	}


	public function survey_questions()
	{
		return $this->hasMany(SurveyQuestion::class);
	}

	public function survey_respondents()
	{
		return $this->hasMany(SurveyRespondent::class);
	}
}

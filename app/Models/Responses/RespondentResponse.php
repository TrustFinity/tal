<?php

namespace App\Models\Responses;

use App\Models\Surveys\Survey;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questions\SurveyQuestion;
use App\Models\Respondents\SurveyRespondent;

class RespondentResponse extends Model
{

    protected $fillable = [
        'survey_respondent_id',
        'facebook_id',
        'answer',
    ];


    public static function make(array $params)
    {
        return new RespondentResponse($params);
    }

	public function survey()
    {
    	return $this->belongsTo(Survey::class);
    }

    public function respondent()
    {
    	return $this->belongsTo(SurveyRespondent::class, 'survey_respondent_id');
    }

    public function survey_question()
    {
    	return $this->belongsTo(SurveyQuestion::class);
    }
}

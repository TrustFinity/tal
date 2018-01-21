<?php

namespace App\Models;

use App\Models\Surveys\Survey;
use Illuminate\Database\Eloquent\Model;
use App\Models\Respondents\SurveyRespondent;

class Reward extends Model
{
	protected $fillable = [
		'survey_respondent',
		'survey_id',
		'type',
		'value',
	];
    public function survey()
    {
    	return $this->belongsTo(Survey::class);
    }

    public function survey_respondent()
    {
    	return $this->belongsTo(SurveyRespondent::class);
    }
}

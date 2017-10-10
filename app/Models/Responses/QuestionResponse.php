<?php

namespace App\Models\Responses;

use App\Models\Surveys\Survey;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questions\SurveyQuestion;

class QuestionResponse extends Model
{
	protected $fillable = ['answer'];

    public function survey()
    {
    	return $this->belongsTo(Survey::class);
    }

    public function survey_question()
    {
    	return $this->belongsTo(SurveyQuestion::class);
    }
}

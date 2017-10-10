<?php

namespace App\Models\Questions;

use App\Models\Surveys\Survey;
use Illuminate\Database\Eloquent\Model;
use App\Models\Responses\QuestionResponse;
use App\Models\Respondents\SurveyRespondent;

class SurveyQuestion extends Model
{

    protected $fillable = ['question', 'survey_id'];

    public static function make(array $params)
    {
        return new SurveyQuestion($params);
    }

    public function survey()
    {
    	return $this->belongsTo(Survey::class);
    }

    public function responses()
    {
    	return $this->hasMany(QuestionResponse::class);
    }

    public function respondents()
    {
    	return $this->hasMany(SurveyRespondent::class);
    }
}

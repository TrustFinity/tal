<?php

namespace App\Models\Respondents;

use Illuminate\Database\Eloquent\Model;
use App\Models\Questions\SurveyQuestion;
use App\Models\Responses\QuestionResponse;
use App\Models\Responses\RespondentResponse;

class SurveyRespondent extends Model
{
	protected $fillable = [
		'first_name',
		'middle_name',
		'last_name',
		'age',
		'occupation',
		'password',
		'email',
		'phone_number',
		'city',
		'country',
		'facebook_id',
		'image_url',
		'gender'
	];

    public function responses()
    {
    	return $this->hasMany(QuestionResponse::class);
    }

    public function survey_questions()
    {
        return $this->hasMany(SurveyQuestion::class);
    }

    public function respondent_responses()
    {
        return $this->hasMany(RespondentResponse::class);
    }
}

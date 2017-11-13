<?php

namespace App\Models\Respondents;

use Illuminate\Database\Eloquent\Model;
use App\Models\Responses\QuestionResponse;

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
		'image_url'
	];

    public function responses()
    {
    	return $this->hasMany(QuestionResponse::class);
    }
}

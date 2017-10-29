<?php

namespace App\Models\Respondents;

use Illuminate\Database\Eloquent\Model;
use App\Models\Responses\QuestionResponse;

class SurveyRespondent extends Model
{
	protected $fillable = [
		'firstname',
		'middle_name',
		'lastname',
		'dob',
		'occupation',
		'password',
		'email',
		'sub_county',
		'district',
		'region',
		'country',
		'facebook_id',
		'image_url'
	];

    public function responses()
    {
    	return $this->hasMany(QuestionResponse::class);
    }
}

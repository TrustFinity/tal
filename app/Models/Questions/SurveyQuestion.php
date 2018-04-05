<?php

namespace App\Models\Questions;

// use Charts;
use App\Models\Surveys\Survey;
use Illuminate\Database\Eloquent\Model;
use App\Models\Responses\QuestionResponse;
use App\Models\Responses\RespondentResponse;
use ConsoleTVs\Charts\Builder;

class SurveyQuestion extends Model
{

    protected $fillable = ['question'];

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

    public function respondents_response()
    {
        return $this->hasMany(RespondentResponse::class);
    }

    public function renderChart()
    {
        // $chart = \Charts::database($this->respondents_response, 'bar', 'highcharts')
        //                         ->elementLabel("Total responses.")
        //                         ->title($this->question)
        //                         ->dimensions(1000, 500)
        //                         ->responsive(true)
        //                         ->groupBy('answer');
        $chart = (new Builder)->database($this->respondents_response, 'bar', 'highcharts')
                                ->elementLabel("Total responses.")
                                ->title($this->question)
                                ->dimensions(1000, 500)
                                ->responsive(true)
                                ->groupBy('answer');
        return $chart;
    }
}

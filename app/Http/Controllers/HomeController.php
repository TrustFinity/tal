<?php

namespace App\Http\Controllers;

use Charts;
use Illuminate\Http\Request;
use App\Models\Surveys\Survey;
use App\Models\Respondents\SurveyRespondent;
use App\Models\Responses\RespondentResponse;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Survey::all();
        $respondents = SurveyRespondent::all()->count();
        $respondent_responses = RespondentResponse::all()->count();
        $selected_survey = $surveys->first();

        $chart = Charts::database(SurveyRespondent::all(), 'bar', 'morris')
                                ->title("Respondents By Gender")
                                ->elementLabel("Respondents")
                                ->dimensions(1000, 500)
                                ->responsive(true)
                                ->groupBy('gender');

        return view('home', compact('surveys', 'respondents', 'respondent_responses', 'selected_survey', 'chart'));
    }
}

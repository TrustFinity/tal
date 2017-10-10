<?php

namespace App\Http\Controllers;

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
        return view('home', compact('surveys', 'respondents', 'respondent_responses', 'selected_survey'));
    }
}

<?php

namespace App\Http\Controllers;

use Charts;
use Illuminate\Http\Request;
use App\Models\Surveys\Survey;
use App\Models\Responses\RespondentResponse;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Survey::paginate(10);
        return view('survey.index', compact('surveys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $survey = new Survey;
        return view('survey.create', compact('survey'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $survey = Survey::make($request->all());
        if (!$survey->save()) {
            flash('Failed to create the survey')->error()->important();
            return back()->withErrors($survey->errors());
        }
        flash('Survey created successfully. Add Survey questions below.')->important();
        return redirect('/survey-question/create');
    }

    public function show(Survey $survey)
    {
        $data = $survey->survey_questions()
                       ->with('respondents_response')
                       ->whereHas('respondents_response', function ($query){
                            $query->groupBy('answer');
                       })
                       ->get();
        $responses_count = RespondentResponse::where('survey_id', $survey->id)->count();
        // $respondents_count = RespondentResponse::where('survey_id', $survey->id)
        //                                     ->selectUnique('survey_respondent_id')
        //                                     ->count();
        $chart = Charts::create($data, 'bar', 'morris')
                                ->title("Respondent Responses")
                                ->elementLabel("Responses")
                                ->dimensions(1000, 500)
                                ->responsive(true);
        return view('survey.show', compact('survey', 'chart', 'responses_count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        return view('survey.edit', compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        $survey->is_open = $request->is_open == null ? 0 : 1;
        $survey->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {}

    public function manageQuestions(Survey $survey)
    {
        $questions = $survey->survey_questions;
        return view('survey.manage_questions', compact('questions', 'survey'));
    }
}

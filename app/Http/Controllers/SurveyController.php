<?php

namespace App\Http\Controllers;

use Charts;
use Illuminate\Http\Request;
use App\Models\Surveys\Survey;
use App\Models\Questions\SurveyQuestion;
use App\Models\Responses\RespondentResponse;
use Illuminate\Database\Eloquent\Collection;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Survey::where('is_open', 1)
                         ->orderBy('id', 'desc')
                         ->paginate(10);
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
                       ->whereHas('respondents_response', function ($query){
                            $query->groupBy('answer');
                       })
                       ->with('respondents_response')
                       ->get();
        $questions = new Collection();
        foreach ($data as $question) {
            $questions->push($question);
        }
        $responses_count = RespondentResponse::where('survey_id', $survey->id)->count();
        $respondents_count = RespondentResponse::where('survey_id', $survey->id)
                                ->distinct()
                                ->count();

        $respondents_response = RespondentResponse::where('survey_id', $survey->id)
                                ->selectRaw('count(*) AS cnt, answer')
                                ->groupBy('answer')
                                ->orderBy('cnt', 'DESC')
                                ->get();

        return view('survey.show', compact(
            'survey', 
            'responses_count', 
            'respondents_count',
            'respondents_response'
        ));
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

    public function open(Survey $survey)
    {
        $survey->is_open = 1;
        if (!$survey->save()) {
            flash('Failed to re-open the survey. Try again later.');
            return back();
        }
        flash('Survey Re-opened successfully.');
        return back();
    }

    public function close(Survey $survey)
    {
        $survey->is_open = 0;
        if (!$survey->save()) {
            flash('Failed to close the survey. Try again later.');
            return back();
        }
        flash('Survey closed successfully.');
        return back();
    }

    public function closed(Request $request)
    {
        $surveys = Survey::where('is_open', 0)->paginate(10);
        return view('survey.index_closed', compact('surveys'));
    }
}

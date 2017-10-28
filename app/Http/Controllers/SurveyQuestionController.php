<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surveys\Survey;
use App\Models\Questions\SurveyQuestion;
use App\Models\Responses\QuestionResponse;

class SurveyQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surveys = Survey::all();
        return view('surveyquestion.create', compact('surveys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $survey_question = SurveyQuestion::make($request->all());
        if (!$survey_question->save()) {
            return back()->withErrors(['failed to save the question']);
        }
        $answers = explode(",", $request->answers);

        if (count($answers) > 0) {
            foreach ($answers as $answer) {
                $question_answer = new QuestionResponse();
                $question_answer->answer = $answer;
                $question_answer->survey_id = $request->survey_id;
                $question_answer->survey_question_id = $survey_question->id;
                $question_answer->save();
            }
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SurveyQuestion  $surveyQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(SurveyQuestion $surveyQuestion)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SurveyQuestion  $surveyQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(SurveyQuestion $surveyQuestion)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SurveyQuestion  $surveyQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurveyQuestion $surveyQuestion)
    {
    }
}

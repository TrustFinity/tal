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
        $survey_question->survey_id = $request->id;
        if (!$survey_question->save()) {
            flash('Failed to save the question')->error()->important();
            return back();
        }
        $answers = explode(",", $request->answers);
        if (count($answers) > 0) {
            foreach ($answers as $answer) {
                if (strlen($answer) > 0) {
                    $question_answer = new QuestionResponse();
                    $question_answer->answer = $answer;
                    $question_answer->survey_id = $request->survey_id;
                    $question_answer->survey_question_id = $survey_question->id;
                    if (!$question_answer->save()) {
                        return flash('Failed to save the response ( '. $answer .' ).')->error()->important();
                    }
                }
            }
        }
        flash('Question and its response created successfully.')->important();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SurveyQuestion  $survey_question
     * @return \Illuminate\Http\Response
     */
    public function show(SurveyQuestion $survey_question)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SurveyQuestion  $survey_question
     * @return \Illuminate\Http\Response
     */
    public function edit(SurveyQuestion $survey_question)
    {
        $survey_question->load('responses');
        return view('surveyquestion.edit', compact('survey_question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SurveyQuestion  $survey_question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurveyQuestion $survey_question)
    {
        if (!$survey_question->update($request->all())) {
            return flash('Failed to save the question')->error()->important();
        }
        $answers = explode(",", $request->answers);

        if (count($answers) > 0) {
            foreach ($answers as $answer) {
                if (strlen($answer) > 0) {
                    $question_answer = new QuestionResponse();
                    $question_answer->answer = $answer;
                    $question_answer->survey_id = $survey_question->survey_id;
                    $question_answer->survey_question_id = $survey_question->id;
                    if (!$question_answer->save()) {
                        return flash('Failed to save the response ( '. $answer .' ).')->error()->important();
                    }
                }
            }
        }
        flash('Question and its response updated successfully.')->important();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurveyQuestion $survey_question)
    {
        if (!$survey_question->delete()) {
            flash('Failed to delete the questions')->error()->important();
            return back();
        }
        flash('Question successfully deleted')->important();
        return back();
    }

    public function deleteResponse(SurveyQuestion $survey_question, QuestionResponse $response)
    {
        if (!$response->delete()) {
            flash('Failed to delete '.$response->answer)->error();
            return back();
        }
        flash('Successfully deleted '.$response->answer)->success();
        return back();
    }
}

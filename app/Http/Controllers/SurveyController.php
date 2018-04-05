<?php

namespace App\Http\Controllers;

use Charts;
use Illuminate\Http\Request;
use App\Models\Surveys\Survey;
use App\Models\Questions\SurveyQuestion;
use App\Models\Responses\QuestionResponse;
use App\Models\Respondents\SurveyRespondent;
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
        flash('Survey created successfully. Add Survey questions to this survey.')->important();
        // return redirect('/survey-question/create');
        return redirect('/survey/'.$survey->id);
    }

    public function show(Survey $survey)
    {
        $survey->load('survey_questions');
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
        $survey->update($request->all());
        flash('Survey updated successfully.')->important();
        return redirect('/survey');
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

    public function showQuesttionPage(Request $request, Survey $survey)
    {
        return view('survey.question.create', compact('survey'));
    }

    public function saveSurveyQuestion(Request $request, Survey $survey)
    {
        $survey_question = SurveyQuestion::make($request->all());
        $survey_question->survey_id = $survey->id;
        if (!$survey_question->save()) {
            return flash('Failed to save the question')->error()->important();
        }
        $answers = explode(",", $request->answers);
        if (count($answers) > 0) {
            foreach ($answers as $answer) {
                $question_answer = new QuestionResponse();
                $question_answer->answer = $answer;
                $question_answer->survey_id = $request->survey_id;
                $question_answer->survey_question_id = $survey_question->id;
                if (!$question_answer->save()) {
                    return flash('Failed to save the response ( '. $answer .' ).')->error()->important();
                }
            }
        }
        flash('Question and its response added successfully to this survey.')->important();
        return redirect('/survey/'.$survey->id);
    }

    public function demographicData(Survey $survey)
    {
        $survey->load('survey_questions');
        return view('survey.demographics', compact('survey'));
    }
}

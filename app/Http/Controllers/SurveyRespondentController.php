<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respondents\SurveyRespondent;

class SurveyRespondentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respondents = SurveyRespondent::paginate(15);
        return view('respondents.index', compact('respondents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SurveyRespondent  $surveyRespondent
     * @return \Illuminate\Http\Response
     */
    public function show(SurveyRespondent $surveyRespondent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SurveyRespondent  $surveyRespondent
     * @return \Illuminate\Http\Response
     */
    public function edit(SurveyRespondent $surveyRespondent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SurveyRespondent  $surveyRespondent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurveyRespondent $surveyRespondent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SurveyRespondent  $surveyRespondent
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurveyRespondent $surveyRespondent)
    {
        //
    }
}

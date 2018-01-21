<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;
use App\Models\Surveys\Survey;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $closed_id = Survey::closed()->pluck('id');
        $pendings   = Reward::whereNotIn('survey_id', $closed_id)->paginate(50);
        return view('rewards.index', compact('pendings'));
    }

    /**
     * List all paid rewards.
     *
     * @return \Illuminate\Http\Response
     */
    public function paid()
    {
        $rewards = Reward::with(['survey', 'survey_respondent'])->paginate(50);
        return view('rewards.paid', compact('rewards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request)
    {
        // Integrate what ever rewards method here.
        // Send it first and then record it.
        // 
        // 

        $reward = new Reward($request->all());
        if (!$reward->save()) {
            flash('Failed to pay this reward')->error()->important();
            return back();
        }
        flash('Reward paid succesfully')->important();
    }
}

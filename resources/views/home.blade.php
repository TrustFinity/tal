@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Dashboard</h4>
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h1 class="stats"> {{ $surveys->count() }}</h1>
                    <p>surveys. <a href="/survey">view all</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading"> 

                    <h1 class="stats"> {{ $respondents }}</h1>
                    <p>Respondents. <a href="/respondents"> View Respondents</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading">

                    <h1 class="stats">{{ $respondent_responses }}</h1>
                    <p>Responses.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h1 class="stats">2,000,000</h1>
                    <p>In Rewards.<a href="/payments"> Monthly history</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <h4> Graph Statistics</h4>
            <form action="" method="">
                <select class="form-control pull-left" name="survey" id="survey">
                    @foreach($surveys as $survey)
                        <option value="{{ $survey->id }}"> {{ $survey->name }}</option>
                    @endforeach
                </select>
                <p></p>
                <button type="submit" class="btn btn-success" style="margin-top: 10px;"> Show Statistics</button>
            </form>
        </div>
        <div class="col-sm-9">
            <h4>{{ $selected_survey->name }}</h4>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Legends here</p>
                </div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

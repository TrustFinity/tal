@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Dashboard</h4>
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Surveys Made</div>

                <div class="panel-body">
                    <strong>{{ $surveys->count() }} surveys</strong>
                </div>
                <div class="panel-footer">

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Signed Up Users</div>

                <div class="panel-body">
                    <strong> {{ $respondents }} Users</strong>
                </div>

                <div class="panel-footer">

                </div>

            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Surveys Responses</div>

                <div class="panel-body">
                    <strong>{{ $respondent_responses }} total responses</strong>
                </div>
                <div class="panel-footer">

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Rewards Paid Out</div>

                <div class="panel-body">
                    <strong>UGX 2,000,000</strong>
                </div>

                <div class="panel-footer">

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

                <div class="panel-footer">
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

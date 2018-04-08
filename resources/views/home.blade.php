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
                    <p>Respondents. <a href="/respondents"> View</a></p>
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
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(!isset($chart) || $respondents < 3)
                        <h5>More data is needed to start rendering graphs here.</h5>
                    @endif
                    @isset ($chart)
                        @if($respondents >= 3)
                            {{-- {!! $chart->html() !!} --}}
                        @endif
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    @isset($chart)
        @if($respondents >= 3)
            {{-- {!! $chart->script() !!} --}}
        @endif
    @endisset
@endsection

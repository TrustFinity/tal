@extends('layouts.app')

@section('content')
<div class="container">
	<h4>{{ $survey->name }}</h4>
	<p>{{ $survey->description }}</p>
</div>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>General statistics</h4>
		</div>
    	<div class="panel-body">
			<div class="alert alert-info">
				<span class="text-success">{{ $survey->survey_questions->count() }}</span> questions.
				<span class="text-success">{{ $responses_count }}</span> reponses.
				300 people took the survey.
			</div>
			{{-- {!! $chart->html() !!} --}}
    	</div>
    </div>

</div>
@endsection
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
				{{ $respondents_count }} took the survey.
			</div>

			@php
				$charts = [];	
			@endphp

			@foreach($survey->survey_questions as $key=>$question)
				@php
					$charts[$key]=$question->renderChart();
				@endphp
			@endforeach

			@if($charts)
				@foreach($charts as $key=>$chart)
					<hr class="row">
					{!! $charts[$key]->html() !!}
				@endforeach
			@endif

    	</div>
    </div>

</div>
@endsection
@section('scripts')
	@if($charts)
		@foreach($charts as $key=>$chart)
	        {!! $charts[$key]->script() !!}
		@endforeach
	@endif
@endsection

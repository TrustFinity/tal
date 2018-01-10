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

			@foreach($survey->survey_questions as $question)
				<h4>Question</h4>
				<p>{{ $question->question }}</p>
				@foreach($respondents_response as $response)
					<p>{{ $response->answer }}</p>
				@endforeach
			@endforeach
    	</div>
    </div>

</div>
@endsection
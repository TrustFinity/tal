@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h4>{{ $survey->name }}</h4>
			<p>{{ $survey->description }}</p>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
				<div class="col-sm-8">
					<h4>Survey Respondents Statistics / Demography</h4>
					<p>This is per questions response.</p>
				</div>
				<div class="col-sm-2">
					
				</div>
			</div>
		</div>
    	<div class="panel-body">
			@foreach($survey->survey_questions as $question)
				<h3>{{ $question->question }}</h3>
				@foreach($question->respondents_response as $respondents_response)
					<p class="text-primary">{{ $respondents_response->answer }}</p>
					@if($respondents_response->respondent)
						<div class="alert alert-info">
							<p> <strong>Name: </strong>
								{{ $respondents_response->respondent->first_name }}
								{{ $respondents_response->respondent->middle_name }}
								{{ $respondents_response->respondent->last_name }}
							</p>
							<p> <strong>Age:</strong> {{ $respondents_response->respondent->age }}</p>
							<p> <strong>Gender:</strong> {{ $respondents_response->respondent->gender }}</p>
							<p> <strong>Country:</strong> {{ $respondents_response->respondent->country }}</p>
							<p> <strong>Occupation:</strong> {{ $respondents_response->respondent->occupation }}</p>
						</div>
					@endif
				@endforeach
				<hr>
			@endforeach
    	</div>
    </div>
</div>
@endsection
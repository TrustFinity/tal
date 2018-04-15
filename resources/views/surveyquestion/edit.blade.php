@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Survey Question</h4>
	<form action="/survey-question/{{$survey_question->id}}" method="POST">
		<div class="panel panel-default">
			<div class="panel-body">
				{{-- <div class="col-md-6 col-md-offset-3"> --}}
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="form-group">
						<span><label for="question">Question</label></span> (<span class="text-danger">Required</span>)
						<br>
						<span>Please be descriptive enough</span>
						<textarea name="question" id="question" class="form-control" required>{{ $survey_question->question }}
						</textarea>
					</div>
					<answer-form>
					</answer-form>
				{{-- </div> --}}
			</div>
			<div class="panel-footer">
				{{-- <div class="row"> --}}
					{{-- <div class="col-md-6 col-md-offset-3"> --}}
						<button class="btn btn-success">Update Question</button>
					{{-- </div> --}}
				{{-- </div> --}}
			</div>
    	</div>
	</form>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Manage responses</h4>
		</div>
		<div class="panel-body">
			@foreach($survey_question->responses as $response)
				<form action="/survey-question/{{$survey_question->id}}/response/{{$response->id}}/delete" method="POST">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<p>{{ $response->answer }}</p>
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
				<hr>
			@endforeach
		</div>
	</div>

@endsection

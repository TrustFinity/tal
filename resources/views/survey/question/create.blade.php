@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Add Survey Questions</h4>
    <div class="alert alert-info">
		<h4><a href="/survey/{{$survey->id}}/manage-questions">Manage questions.</a></h4>
		<p>Delete question you don't want to see or made mistakes on.</p>
	</div>
	<form action="/survey/{{ $survey->id }}/question" method="POST">
		<div class="panel panel-default">
			<div class="panel-heading">
				New survey Question
			</div>
			<div class="panel-body">
				<div class="col-md-6 col-md-offset-3">
					{{ csrf_field() }}
					<input type="hidden" name="survey_id" value="{{ $survey->id }}">
					<div class="form-group">
						<span><label for="question">Question</label></span> (<span class="text-danger">Required</span>)
						<br>
						<span>Please be descriptive enough</span>
						<textarea name="question" id="question" class="form-control" required>
						</textarea>
					</div>
					<answer-form>
					</answer-form>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<button class="btn btn-success">Add Question</button>
					</div>
				</div>
			</div>
    	</div>
	</form>

@endsection
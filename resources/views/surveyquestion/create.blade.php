@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Add Survey Questions</h4>
	<form action="/survey-question" method="POST">
		<div class="panel panel-default">
			<div class="panel-heading">
				New survey Question
			</div>
			<div class="panel-body">
				<div class="col-md-6 col-md-offset-3">
					{{ csrf_field() }}
					<div class="form-group">
						<span><label for="survey_id">Select Survey</label></span> (<span class="text-danger">Required</span>)
						<br>
						<span>Please select the survey this question belongs too</span>
						<select name="survey_id" id="survey_id" class="form-control">
							@foreach($surveys as $survey)
								<option value="{{ $survey->id }}">{{ $survey->name }}</option>
							@endforeach
						</select>
					</div>
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
				<button class="btn btn-success"> Create</button>
			</div>
    	</div>
	</form>

@endsection

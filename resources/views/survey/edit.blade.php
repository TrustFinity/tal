@extends('layouts.app')

@section('content')
<div class="container">
	<h4 class="pull-left">Edit {{ $survey->name }}</h4>
	<a href="/survey" class="btn btn-default pull-right">Go back</a>
</div>
<div class="container">
	<form action="/survey/{{ $survey->id }}" method="POST">
		<div class="panel panel-default">
			<div class="panel-body">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group">
					<span><label for="name">Survey name</label></span> (<span class="text-danger">Required</span>)
					<br>
					<span>A human ready name of the survey</span>
					<input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $survey->name) }}">
				</div>
				<div class="form-group">
					<span><label for="description">Survey Description</label></span> (<span class="text-danger">Required</span>)
					<br>
					<span>Descript the purpose of this survey with its targets</span>
					<textarea type="text" name="description" id="description" class="form-control" required>{{ old('description', $survey->description) }}
					</textarea>
				</div>
				{{-- <div class="form-group">
					<span><label for="description">Survey Restrictions</label></span> (<span class="text-danger">Required</span>)
					<br>
					<span>List all the restrictions on this survey like age, occupation or location. Enter comma seperated values.</span>
					<input class="form-control" type="text" 
						name="restrictions" 
						placeholder="eg. 23, Finance, Gulu" value="{{ old('restrictions', $survey->restrictions) }}">
				</div> --}}
				<div class="form-group">
					<span><label for="description">Close Survey</label></span> (<span class="">Optional</span>)
					<br>
					<span>
						When a survey has already been run for some time and ypu feel it shouldn't be shown to the respondents anymore, check the box below.
					</span>
					<br><br>
					<input type="checkbox" name="is_open"
						id="is_open" 
						checked="{{ $survey->is_open }}">
					<label for="is_open"> Uncheck to close survey</label>
				</div>
			</div>
			<div class="panel-footer">
				<button class="btn btn-success">Update</button>
			</div>
    	</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<a href="/survey/{{$survey->id}}/manage-questions">Click to Manage Questions</a>
			</div>
		</div>
	</form>

@endsection

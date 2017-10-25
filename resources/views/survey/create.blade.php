@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Create Survey</h4>
	<form action="/survey" method="POST">
		<div class="panel panel-default">
			<div class="panel-heading">
				New survey
			</div>
			<div class="panel-body">
				{{ csrf_field() }}
				<div class="form-group">
					<span><label for="name">Survey name</label></span> (<span class="text-danger">Required</span>)
					<br>
					<span>A human ready name of the survey</span>
					<input type="text" name="name" id="name" class="form-control" required>
				</div>
				<div class="form-group">
					<span><label for="description">Survey Description</label></span> (<span class="text-danger">Required</span>)
					<br>
					<span>Descript the purpose of this survey with its targets</span>
					<textarea type="text" name="description" id="description" class="form-control" required>
					</textarea>
				</div>
				<div class="form-group">
					<span><label for="description">Survey Restrictions</label></span> (<span class="text-danger">Required</span>)
					<br>
					<span>List all the restrictions on this survey like age, occupation or location. Enter comma seperated values.</span>
					<input class="form-control" type="text" 
						name="restrictions" 
						placeholder="eg. 23, Finance, Gulu">
					</textarea>
				</div>
			</div>
			<div class="panel-footer">
				<button class="btn btn-success"> Create</button>
			</div>
    	</div>
	</form>

@endsection

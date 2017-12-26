@extends('layouts.app')

@section('content')
<div class="container">
	<h3 class="pull-left">Active Surveys</h3>
	<div class="btn-group pull-right">
		<a href="/survey/create" class="btn btn-default">Create New</a>
		<a href="/survey/create" class="btn btn-default">View Closed</a>
	</div>
</div>
<div class="container">
	{{ $surveys->links() }}			
</div>
<div class="container">
    <div class="panel panel-default">
    	<div class="panel-body">
    		@foreach($surveys as $survey)
				<h3>
					<a href="/survey/{{ $survey->id }}"> {{ $survey->name }} </a>
				</h3>
				<p>{{ $survey->description }}</p>
				<span class="text-success">{{ $survey->survey_questions->count() }}</span> question. 
				<a href="/survey/{{ $survey->id }}/edit">Click to edit</a>
				<a href="/survey/{{ $survey->id }}/close" class="btn btn-danger btn-xs pull-right">Close Survey</a>
				<hr class="row">
    		@endforeach
    	</div>
    </div>	
</div>
<div class="container">
	{{ $surveys->links() }}			
</div>
@endsection

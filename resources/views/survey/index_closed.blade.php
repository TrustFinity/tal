@extends('layouts.app')

@section('content')
<div class="container">
	<h3 class="pull-left text-danger">{{ $surveys->count() }} Closed Surveys</h3>
	<div class="btn-group pull-right">
		<a href="/survey/create" class="btn btn-default">Create New</a>
		<a href="/survey" class="btn btn-success">View Active</a>
	</div>
</div>
<div class="container">
	{{ $surveys->links() }}			
</div>
<div class="container">
    <div class="panel panel-default">
    	<div class="panel-body">
    		@if($surveys->count() == 0)
    			<h2>There are no closed surveys yet.</h2>
    			View all <a href="/survey" class="danger">active </a> surveys.
    		@endif
    		@foreach($surveys as $survey)
				<h3>
					<a href="/survey/{{ $survey->id }}"> {{ $survey->name }} </a>
				</h3>
				<p>{{ $survey->description }}</p>
				<span class="text-success">{{ $survey->survey_questions->count() }}</span> question. 
				<a href="/survey/{{ $survey->id }}/open" class="btn btn-success btn-xs pull-right">Re-open Survey</a>
				<hr class="row">
    		@endforeach
    	</div>
    </div>	
</div>
<div class="container">
	{{ $surveys->links() }}			
</div>
@endsection

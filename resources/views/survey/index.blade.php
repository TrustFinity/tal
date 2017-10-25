@extends('layouts.app')

@section('content')
<div class="container">
	<h4 class="pull-left">All Surveys</h4>
	<a href="/survey/create" class="btn btn-success pull-right">Create New</a>
</div>
<div class="container">
    <div class="panel panel-default">
    	<div class="panel-body">
    		@foreach($surveys as $survey)
				<a href="/survey/{{ $survey->id }}/edit"> {{ $survey->name }} </a>
				<p>{{ $survey->description }}</p>
				<a href="/survey/{{ $survey->id }}/edit">Click to edit</a>
				<hr class="row">
    		@endforeach
    	</div>
    </div>				
@endsection

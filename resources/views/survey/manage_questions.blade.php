@extends('layouts.app')

@section('content')
	<div class="container">
		<h4> {{ $survey->name }}</h4>
		<p>{{ $survey->description }}</p>
	</div>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Note: Deleted Questions will affect tally if already answered.</h5>
			</div>
			<div class="panel-body">
				@if($questions->count() == 0)
					<h4 class="text-info"> No questions available for this survey. <a href="/survey-question/create">Add some</a>.</h4>
				@endif
				@foreach($questions as $question)
					<h4>{{ $question->question }}</h4>
					<form action="/survey-question/{{$question->id}}" method="POST">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger btn-xs">Delete</button>
					</form>
					<hr class="row">
				@endforeach
			</div>
		</div>
	</div>
@endsection
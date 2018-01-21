@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="container">
			<h3 class="text-info">Paid Rewards</h3>
			<a href="/rewards" class="btn btn-default">View unpaid</a>
		</div>
		<div class="row"><p></p></div>
		<div class="container">
			{{ $rewards->links() }}			
		</div>
		<div class="container">
		    <div class="panel panel-default">
		    	<div class="panel-body">
		    		@if($rewards->count() == 0)
		    			<h2>There are no paid rewards yet.</h2>
		    			View all <a href="/rewards" class="danger">unpaid</a> rewards.
		    		@endif
		    		@foreach($rewards as $reward)
						<h3>
							<a href="/reward/{{ $reward->id }}"> {{ $reward->survey->title }} </a>
						</h3>
						{{-- <p>{{ $reward->description }}</p>
						<span class="text-success">{{ $reward->reward_questions->count() }}</span> question. 
						<a href="/reward/{{ $reward->id }}/edit">Click to edit</a>
						<a href="/reward/{{ $reward->id }}/close" class="btn btn-danger btn-xs pull-right">Close reward</a>
						<hr class="row"> --}}
		    		@endforeach
		    	</div>
		    </div>	
		</div>
		<div class="container">
			{{ $rewards->links() }}			
		</div>
	</div>
@endsection
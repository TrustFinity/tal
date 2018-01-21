@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>Pending Rewards</h3>
	</div>
	<div class="container">
		<a href="/rewards/paid" class="btn btn-danger">View Paid</a>
	</div>
	<div class="row"><p></p></div>
	<div class="container">
		{{ $pendings->links() }}			
	</div>
	<div class="container">
	    <div class="panel panel-default">
	    	<div class="panel-body">
	    		@if($pendings->count() == 0)
	    			<h2>There are no pending rewards.</h2>
	    			View all <a href="/rewards/paid" class="danger">paid</a> rewards.
	    		@endif
	    		@foreach($pendings as $pending)
					<h3>
						<a href="/pending/{{ $pending->id }}"> {{ $pending->name }} </a>
					</h3>
					{{-- <p>{{ $pending->description }}</p>
					<span class="text-success">{{ $pending->pending_questions->count() }}</span> question. 
					<a href="/pending/{{ $pending->id }}/edit">Click to edit</a>
					<a href="/pending/{{ $pending->id }}/close" class="btn btn-danger btn-xs pull-right">Close pending</a>
					<hr class="row"> --}}
	    		@endforeach
	    	</div>
	    </div>	
	</div>
	<div class="container">
		{{ $pendings->links() }}			
	</div>
@endsection
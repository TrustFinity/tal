@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Registered Respondents</h3>
</div>
<div class="container">
	{{ $respondents->links() }}			
</div>
<div class="container">
    {{-- <div class="panel panel-default">
    	<div class="panel-body"> --}}
    		@if($respondents->count() == 0)
    			<div class="alert alert-info">Now Respondents registered yet.</div>
    		@endif
    		@foreach($respondents as $respondent)
				<div class="row list-group-item">
					<h4 class="text-primary">
						{{ $respondent->first_name }}
						{{ $respondent->middle_name }}
						{{ $respondent->last_name }}
					</h4>
					<p>Age: {{ $respondent->age }}</p>
					<p>{{ $respondent->email }}</p>
					<p>{{ $respondent->phone_number }}</p>
				</div>
    		@endforeach
    	</div>
    {{-- </div>	
</div> --}}
<div class="container">
	{{ $respondents->links() }}			
</div>
@endsection

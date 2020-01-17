@extends('layouts.app')

@section('content')

<h1>Новый SEARCH</h1>

<div class="row">
	<div class="col">

		{!! Form::open(['route' => 'welcome.step2'], ['class' => 'form']) !!}

		<div class="form-group">
			{!! Form::label('self_position', 'I am',['class' => 'control-label']) !!} <br/>
			{!! Form::select('self_position', $positions, null,['placeholder' => 'You are ...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('search_position', 'Search for',['class' => 'control-label']) !!} <br/>
			{!! Form::select('search_position', $positions, null,['placeholder' => 'Search for ...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('event', 'Event',['class' => 'control-label']) !!} <br/>
			{!! Form::select('event', $events, null,['placeholder' => 'Select event ...']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Next', ['class' => 'btn btn-info btn-lg', 'style' => 'width: 100%']) !!}
		</div>

		{!! Form::close() !!}

	</div>
</div>

@endsection
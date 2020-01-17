@extends('layouts.app')

@section('content')

<h1>Новый SEARCH</h1>

<div class="row">
	<div class="col">

		{!! Form::open(['route' => 'welcome.step2'], ['class' => 'form']) !!}

		<div class="form-group">
			{!! Form::label('self_position', 'I am',['class' => 'control-label']) !!}
			{!! Form::select('self_position', $positions, null) !!}
		</div>

		<div class="form-group">
			{!! Form::label('search_position', 'Search for',['class' => 'control-label']) !!}
			{!! Form::select('search_position', $positions, '2') !!}
		</div>

		<div class="form-group">
			{!! Form::label('event', 'Event',['class' => 'control-label']) !!}
			{!! Form::select('event', $events, null) !!}
		</div>

		<div class="form-group">
			{!! Form::label('description', 'Description',['class' => 'control-label']) !!} <br/>
			{!! Form::textarea('description', null,['class' => 'form-control input-lg','placeholder' => 'A little bit more ...']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Next', ['class' => 'btn btn-info btn-lg', 'style' => 'width: 100%']) !!}
		</div>

		{!! Form::close() !!}

	</div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<h1>CREATE EVENT</h1>

<div class="row">
	<div class="col">

		{!! Form::open(['route' => 'events.store'], ['class' => 'form']) !!}

		<div class="form-group">
			{!! Form::label('description', 'Event Description',['class' => 'control-label']) !!} <br/>
			{!! Form::textarea('description', null,['class' => 'form-control input-lg','placeholder' => 'Describe event ...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('start_date', 'Starts at', ['class' => 'control-label']) !!}
			{!! Form::date('start_date', null) !!}
		</div>

		<div class="form-group">
			{!! Form::label('end_date', "Ends at", ['class' => 'control-label'])!!}
			{!! Form::date('end_date', null) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('is_active', "Active", ['class' => 'control-label'])!!}
			{!! Form::checkbox('is_active', 'is_active', true) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Create', ['class' => 'btn btn-info btn-lg', 'style' => 'width: 100%']) !!}
		</div>

		{!! Form::close() !!}

	</div>
</div>

@endsection
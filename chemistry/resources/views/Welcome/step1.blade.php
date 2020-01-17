@extends('layouts.app')

@section('content')
<h1>Step 1</h1>

<div class="row">
	<div class="col">
		{!! Form::open(['route' => ['registration.step2', $login]], ['class' => 'form']) !!}

		<div class="form-group">
			{!! Form::label('self_position', 'You are',['class' => 'control-label']) !!} <br/>
			{!! Form::select('self_position', $positions, null,['placeholder' => 'On event ...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('search_position', 'You search for',['class' => 'control-label']) !!} <br/>
			{!! Form::select('search_position', $positions, null,['placeholder' => 'On event ...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('event', 'On event',['class' => 'control-label']) !!} <br/>
			{!! Form::select('event', $events, null,['placeholder' => 'On event ...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('description', 'Description',['class' => 'control-label']) !!} <br/>
			{!! Form::textarea('description', null,['class' => 'form-control input-lg','placeholder' => 'And several words ...']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Next', ['class' => 'btn btn-info btn-lg', 'style' => 'width: 100%']) !!}
		</div>

		{!! Form::close() !!}

	</div>
</div>

@endsection
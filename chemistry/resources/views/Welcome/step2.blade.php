@extends('layouts.app')

@section('content')

<h1>Новый DESCRIPTION</h1>

<div class="row">
	<div class="col">

		{!! Form::open(['route' => 'welcome.step3'], ['class' => 'form']) !!}

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
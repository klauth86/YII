@extends('layouts.app')

@section('content')
<h1>EDIT POSITION</h1>

<div class="row">
	<div class="col">

		{!! Form::model($position, ['method' => 'put', 'route' => ['positions.update', $position->id], 'class' => 'form']) !!}

		<div class="form-group">
			{!! Form::label('description', 'Description',['class' => 'control-label']) !!} <br/>
			{!! Form::textarea('description', null,['class' => 'form-control input-lg','placeholder' => 'Describe position ...']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('order', 'Order', ['class' => 'control-label']) !!}
			{!! Form::text('order', null,['class' => 'form-control input-lg','placeholder' => 'Set position order ...']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Update', ['class' => 'btn btn-info btn-lg', 'style' => 'width: 100%']) !!}
		</div>
		
		{!! Form::close() !!}

	</div>
</div>

@endsection
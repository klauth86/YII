@extends('layouts.app')

@section('content')

<h1>{{ $position->id }}</h1>

<p>
Description: {{ $position->description }} <br />
Order: {{ $position->order }}
</p>

@endsection
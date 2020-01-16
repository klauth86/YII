@extends('layouts.app')

@section('content')

<h1>{{ $event->id }}</h1>

<p>
Description: {{ $event->description }} <br />
Starts: {{ $event->start_date }} <br />
Ends: {{ $event->end_date }} <br />
Is Active: {{ $event->is_active }}
</p>

@endsection
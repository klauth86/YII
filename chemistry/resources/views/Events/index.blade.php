@extends('layouts.app')

@section('content')
<h1>Events</h1>

<ul>
@forelse ($events as $event)
<li>

<table>
<tr>
<td>{{ $event->description }}</td>
<td>{{ $event->start_date }}</td>
<td>{{ $event->end_date }}</td>
<td>{{ $event->is_active }}</td>
<td><a href = "{{ route('events.destroy', [$event]) }}"/>Удалить</td>
<td><a href = "{{ route('events.edit', [$event]) }}"/>Редактировать</td>
</tr>
</table>

</li>
@empty
<li>No events found!</li>
@endforelse
</ul>

{!! $events->links() !!}

@endsection
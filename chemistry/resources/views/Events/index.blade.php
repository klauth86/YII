{{-- Output the $id variable. --}}
<p>
<ul>
@foreach ($events as $event)
<li>{{ $event }}</li>
@endforeach
</ul>
</p>

{{-- Output the $id variable with checking if array is empty. --}}
<p>
<ul>
@forelse ($events as $event)
<li>{{ $event }}</li>

@if (strpos($event, 'Laravel') !== false)
(sweet framework!)
@elseif (strpos($event, 'Raspberry') !== false)
(love me some Raspberry Pi!)
@else
(don't know much about this one!)
@endif

@empty
<li>No events available.</li>
@endforelse
</ul>
</p>

<p>
<table>
@foreach ($events as $event)
@include('partials._row', ['event' => $event])
@endforeach
</table>
<p>
@extends('layouts.app')

@section('content')
<h1>Your current search</h1>

<div>
<ul>
@forelse ($accounts as $account)
<li>

<div> {{ $account->name }} {{ $account->patronymic }} {{ $account->surname }}</div>
<image width="100px" height="100px" background="red"></image>

<table>
<tr>

@forelse ($account->accountRefs as $ref)
<td>
<a href="{{ $ref->reference }}">1</a>
</td>
@empty
<td>User leave no references!</td>
@endforelse

<tr>
</table>

</li>
@empty
<li>Nothing found!</li>
@endforelse
</ul>
</div>

{{ $accounts->links() }}

@endsection
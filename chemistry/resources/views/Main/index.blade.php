@extends('layouts.app')

@section('content')
<h1>Результаты по вашему поиску</h1>

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
<td>-</td>
@endforelse

<tr>
</table>

</li>
@empty
<li>-</li>
@endforelse
</ul>
</div>

{{ $accounts->links() }}

@endsection
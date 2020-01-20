@extends('layouts.app')

@section('content')
<h1>Your settings</h1>

<div> {{ $account->name }} {{ $account->patronymic }} {{ $account->surname }}</div>
<image width="100px" height="100px" background="red"></image>


@endsection
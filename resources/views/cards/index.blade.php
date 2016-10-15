@extends('layout')

@section('content')
<h1>All Cards</h1>	
<ul>
@foreach ($cards as $card)
	<li class="card">
		<a href="/cards/{{$card->id}}">{{ $card->title }}</a>
	</li>
@endforeach
</ul>
@stop
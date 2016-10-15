@extends('layout')

@section('content')
	<h1>{{ $card->title }}</h1>
	<div class="notes">
		<h2>Notes</h2>
		<ol>
		@foreach ($card->notes as $note)
			<li>{{ $note->body }}</li>
		@endforeach
		</ol>
	<a href="/cards">Go Back</a>
@stop
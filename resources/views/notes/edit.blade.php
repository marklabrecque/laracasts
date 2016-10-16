@extends('layout')

@section('content')
<div class="col-md-6 col-md-offset-3">
	<h3>Add a new note</h3>
	<form method="POST" action="/notes/{{ $note->id }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<textarea name="body" class="form-control">{{ $note->body }}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Note</button>
		</div>
	</form>
</div>
@stop
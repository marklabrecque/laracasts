@extends('layout')

@section('content')
    @if (empty($people))
        <div>There are no people</div>
    @else
        <ul>
            <!-- unless directive means if(!) -->
            @foreach ($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
@stop
@extends('index')

@section('content')

    <a href="/"> обратно</a>

    <p>yield - section</p>

    <p> @php
                echo env('DB_DATABASE','null');
                @endphp </p>

@endsection

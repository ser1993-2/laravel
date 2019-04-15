@extends('index')

@section('content')
    <p>Блок №1</p>

    <p> @php
                echo env('DB_DATABASE','null');
                @endphp </p>

@endsection

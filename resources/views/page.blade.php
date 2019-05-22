@extends('index')

@section('admin')

    @push('scripts')
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js')}}" rel="stylesheet"></script>
    @endpush

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{$page->title}}</div>

            <div class="card-body">
                {{$page->description}}
            </div>
        </div>
    </div>



@endsection

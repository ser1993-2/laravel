@extends('index')

@section('content')

    @push('scripts')
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js')}}" rel="stylesheet"></script>
    @endpush

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Child</div>

                <div class="card-body">
                    Extends
                </div>
            </div>
        </div>

@endsection

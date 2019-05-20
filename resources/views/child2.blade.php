@extends('index')

@section('content2')

    @push('scripts')
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @endpush

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Child 2</div>

                <div class="card-body">
                    Extends
                </div>
            </div>
        </div>

@endsection

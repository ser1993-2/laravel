@extends('index')

@section('admin')

    @push('scripts')
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js')}}" rel="stylesheet"></script>
    @endpush

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{$product['product']->name}}</div>

            <div class="card-body">
                {{$product['product']->price}}
            </div>
        </div>
    </div>



    @if(isset($product['comment']))
    @foreach($product['comment'] as $comment)
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$comment->name}}</div>

                <div class="card-body">
                    {{$comment->comment}}
                </div>
            </div>
        </div>
    @endforeach
    @endif


@endsection

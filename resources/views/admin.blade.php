@extends('index')

@section('admin')

    @push('scripts')
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js')}}" rel="stylesheet"></script>
    @endpush

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Admin</div>

            <div class="card-body">
                <form action="/addPage" method="post">
                    @csrf
                    <label>Название</label>
                    <input type="text" class="form-control" name="title">
                    <label>Описание</label>
                    <textarea type="" class="form-control" name="text"></textarea>
                    <button type="submit" class="btn alert-dark">Создать</button>
                </form>
            </div>
        </div>
    </div>

    @if (isset($products))
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Товары</div>

            <div class="card-body">

                @foreach($products as $product)

                    <a href="/product/{{$product->id}}"> {{$product->name}} - {{$product->price}} р.</a>
                    <hr/>
                    @endforeach

            </div>
        </div>
    </div>
    @endif

        @if (isset($pageList))

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PageList</div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">description</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($pageList as $page)
                            <a href="/page/{{ $page->id }}">
                                <tr>
                                    <th scope="row">{{ $page->id }}</th>
                                    <td> <a href="/page/{{ $page->id }}">{{ $page->title }}</a></td>
                                    <td>{{ $page->description }}</td>
                                </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    @endif

@endsection

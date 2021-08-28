@extends('master')
@section('content')

    <div class="row mt-5">
        <div class="col-sm-4">
            <a href="#">filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3>Results of Products</h3>
                @foreach ($products as $item)
                    <a href="detail/{{ $item['id'] }}">
                        <div class="searched-item">
                            <img class="trending-image" src="{{ $item['gallery'] }}" alt="First slide">
                            <div class="">
                                <h2>{{ $item['name'] }}</h2>
                                <h6>{{$item['description']}}</h6>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

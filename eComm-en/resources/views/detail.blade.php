@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img"src="{{$product['gallery']}}" alt="image Product"> 
            </div>
            <div class="col-sm-6 mt-2">
                <a href="/">Go Back</a>
                <h2>{{$product['name']}}</h2>
                <h5>Price : {{$product['price']}}</h5>
                <h5>Details : {{$product['description']}}</h5>
                <h5>Category : {{$product['category']}}</h5>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button type="submit" class="btn btn-primary btn-outline-warning text-white">Add to Cart</button><br><br>
                </form>
               
                <button class="btn btn-success btn-outline-danger text-white">Buy Now</button><br><br>
            </div>
        </div>
    </div>
@endsection

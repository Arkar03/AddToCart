
@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="container m-5 row">
        <div class="col-md-3">
            @include('layout.sidebar')
        </div>
        <div class="col-md-9">
            <h1>Content</h1>

            <div class="row row-cols-1 row-cols-md-2 g-4">

                @foreach ($products as $product)

                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('uploads/' . unserialize($product->imgs)[0]) }}" class="card-img-top" />
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <span class="">$ {{ $product->price }}</span>
                                </div>
                                <p class="card-text">{{ $product->description }}</p>
                            </div>
                            <div class="card-footer justify-content-between d-flex">
                                <a href="#" class="btn btn-secondary">View Details</a>
                                <a href="{{ route('product.cart.add', ['id' => $product->id]) }}"
                                    class="btn btn-secondary">Add to
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

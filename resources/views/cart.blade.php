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



                {{-- {{var_dump($products)}} --}}
                @if (!empty($products))
                    {{-- Single Product Show --}}
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:50%">Product</th>
                                <th style="width:10%">Price</th>
                                <th style="width:8%">Quantity</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-3 hidden-xs"><img style="width: 100px; height:100px"
                                                    src="{{ asset('/uploads/' . unserialize($product->imgs)[0]) }}"
                                                    class="img-responsive" /></div>
                                            <div class="col-sm-9 ps-3">
                                                <h4 class="">{{ $product->title }}</h4>
                                                <p>{{ substr($product->description, 0, 100) }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">{{ $product->price }}</td>
                                    <td data-th="Quantity">
                                        <input type="number" class="form-control text-center" value="1">
                                    </td>
                                    <td data-th="Subtotal" class="text-center">1.99</td>
                                    <td class="actions" data-th="">
                                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>
                                    <a href="#" class="btn btn-warning">
                                        <i class="fa fa-angle-left"></i>
                                        Continue
                                    </a>
                                </td>
                                <td colspan="2" class="text-center"><strong>Total $1.99</strong></td>
                                <td colspan="3"><a href="#" class="btn btn-success float-end">
                                        <span>Checkout</span>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </td>
                            </tr>

                        </tfoot>

                    </table>
                @else
                    <h1>Empty Cart!</h1>
                @endif



            </div>
        </div>
    </div>
@endsection

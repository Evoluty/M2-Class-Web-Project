@extends('app')

@section('title', 'Cart')

@section('content')
    <div class="container-fluid">

        <h3>Shopping Cart</h3>

        {{ Form::open(array('url' => '')) }}
        <div class="container-fluid">
            <table class="table">
                <thead>
                <tr class="row d-none d-sm-flex">
                    <th class="col-sm-2">PRODUCT IMAGE</th>
                    <th class="col-sm-5">PRODUCT NAME</th>
                    <th class="col-sm-1">QTY</th>
                    <th class="col-sm-1">PRICE</th>
                    <th class="col-sm-1"></th>
                    <th class="col-sm-2">TOTAL PRICE</th>
                </tr>
                </thead>
                <tbody>

                @if(empty($cartProducts))
                    <tr class="row justify-content-center"><td class="col-sm-2">EMPTY CART</td></tr>
                @endif

                @foreach($cartProducts as $product)
                <tr class="row">
                    <td class="col-sm-2 col-6"><img src="{{$product->picture_url}}" alt="{{$product->name}}"></td>
                    <td class="col-sm-5 col-6">
                        <div>{{$product->name}}</div>
                        <div class="dropdown">
                            <button type="button" class="btn btn-light" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                Show Options <i class="fas fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Option1</a>
                                <a class="dropdown-item" href="#">Option2</a>
                            </div>
                        </div>
                    </td>
                    <td class="col-sm-1 col-3">
                        <div><input type="text" name="keyword" value="{{$product->count}}"></div>
                        <div>
                            <a href="/cart/updateNbItem/"><i class="fas fa-edit"></i></a>
                            <a href="/cart/deleteItem/{{$product->product_id}}"><i class="fas fa-trash-alt"></i>Remove Item</a>
                        </div>
                    </td>
                    <td class="col-sm-1 col-2">${{$product->price}}</td>
                    <td class="col-sm-1 col-3">=</td>
                    <td class="col-sm-2 col-4">${{$product->price * $product->count}}</td>
                </tr>
                @endforeach

                <tr class="row">
                    <td class="col-sm-12">
                        <button class="btn btn-default" type="submit">ORDER SHOPPING CARD</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        {{ Form::close() }}

        <h3>You might also be interested</h3>
        @include('products._partial')
    </div>
@endsection

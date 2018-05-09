@extends('app')

@section('title', 'Account')

@section('content')
    <div class="container-fluid">
        <h3>My orders</h3>

        <div class="container">
            <div class="row">
                @foreach ($orders as $order)
                    <div class="col-3" style="margin-bottom: 1em">
                        <div class="card border-dark" style="padding: 0; height: 100%">
                            <div class="card-header text-center" style="width: 100%;">{{$order['date']->format('d-m-Y')}} - ${{$order['total']}}</div>
                            <div class="card-body">
                                @foreach($order['products'] as $product)
                                    <div class="row">
                                        <div class="col-6"><img src="{{$product['url']}}" style="height: 6.5em; width: 6.5em"></div>
                                        <div class="col-6" style="margin: auto">
                                            <div class="row justify-content-center"><p class="card-text">{{$product['name']}}</p></div>
                                            <div class="row justify-content-center">x{{$product['count']}}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

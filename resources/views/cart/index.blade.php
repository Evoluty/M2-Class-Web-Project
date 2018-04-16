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
                <tr class="row">
                    <td class="col-sm-2 col-6"><img src="http://bit.ly/2IB4TLA" alt=""></td>
                    <td class="col-sm-5 col-6">
                        <div>Lorem ipsum</div>
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
                        <div><input type="text" name="keyword" value="3"></div>
                        <div>
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i>Remove Item</a>
                        </div>
                    </td>
                    <td class="col-sm-1 col-2">$10.00</td>
                    <td class="col-sm-1 col-3">=</td>
                    <td class="col-sm-2 col-4">$30.00</td>
                </tr>
                <tr class="row">
                    <td class="col-sm-2 col-6"><img src="http://bit.ly/2FLfJkc" alt=""></td>
                    <td class="col-sm-5 col-6">
                        <div>Ut fringilla nec sem</div>
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
                        <div><input type="text" name="keyword" value="1"></div>
                        <div>
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i>Remove Item</a>
                        </div>
                    </td>
                    <td class="col-sm-1 col-2">$445.00</td>
                    <td class="col-sm-1 col-3">=</td>
                    <td class="col-sm-2 col-4">$445.00</td>
                </tr>
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

        <div class="container-fluid suggestions">
            <div class="row">
                <div class="col-sm-3">
                    <div><img src="http://bit.ly/2pmwyXH" alt=""></div>
                    <div>SED AT LAOREET</div>
                    <div>$180.00</div>
                    <div class="buttons">
                        <button type="button" class="btn btn-light" href="#" role="button">
                            <i class="fas fa-shopping-cart"></i>ADD TO CART
                        </button>
                        <button type="button" class="btn btn-light" href="#" role="button">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Option1</a>
                            <a class="dropdown-item" href="#">Option2</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div><img src="http://bit.ly/2FTaJ96" alt=""></div>
                    <div>SED EGET ERAT UT NIBH</div>
                    <div>$234.00</div>
                    <div class="buttons">
                        <button type="button" class="btn btn-light" href="#" role="button">
                            <i class="fas fa-shopping-cart"></i>ADD TO CART
                        </button>
                        <button type="button" class="btn btn-light" href="#" role="button">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Option1</a>
                            <a class="dropdown-item" href="#">Option2</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div><img src="http://bit.ly/2G3pcCN" alt=""></div>
                    <div>EGESTAS ELEMENTUM</div>
                    <div>$190.00</div>
                    <div class="buttons">
                        <button type="button" class="btn btn-light" href="#" role="button">
                            <i class="fas fa-shopping-cart"></i>ADD TO CART
                        </button>
                        <button type="button" class="btn btn-light" href="#" role="button">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Option1</a>
                            <a class="dropdown-item" href="#">Option2</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div><img src="http://bit.ly/2HI8TbF" alt=""></div>
                    <div>DIGNISSIM DUI PORTTITO</div>
                    <div>$222.00</div>
                    <div class="buttons">
                        <button type="button" class="btn btn-light" href="#" role="button">
                            <i class="fas fa-shopping-cart"></i>ADD TO CART
                        </button>
                        <button type="button" class="btn btn-light" href="#" role="button">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-light" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Option1</a>
                            <a class="dropdown-item" href="#">Option2</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

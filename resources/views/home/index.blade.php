@extends('app')

@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <h3>Suggestions</h3>
        <div class="row">
            <div class="col-sm-2 d-none d-sm-block"></div>
            <div class="col-sm-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" style="max-height: 20em" src="https://bit.ly/2r8pboF" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="max-height: 20em" src="https://bit.ly/2I3asVL" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="max-height: 20em" src="https://bit.ly/2jgjpwU" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <h3>Our products</h3>
        @include('products.index')
    </div>
@endsection

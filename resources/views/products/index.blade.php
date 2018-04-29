<div class="container-fluid products">
    <div class="row">

        @foreach ($products as $product)
            <div class="col-sm-3">
                <div><img src="{{$product->picture_url}}" alt="{{$product->name}}"></div>
                <div>{{$product->name}}</div>
                <div>${{$product->price}}</div>
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
        @endforeach

    </div>
</div>

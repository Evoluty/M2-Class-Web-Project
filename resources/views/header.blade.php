<header class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-xs-12 d-none d-sm-block">
            <a href="/">{{ HTML::image('img/logo.png', 'logo', array('id' => 'header_logo')) }}</a>
        </div>

        <div class="col-sm-6 col-xs-12 header_right">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2 d-none d-sm-block"></div>

                    <div class="col-sm-8 col-xs-12">
                        {{ Form::open(array('url' => '', 'class' => 'form-row input-group')) }}
                        <select class="custom-select input-group-prepend" name="category">
                            <option selected>All</option>
                            @foreach($categories as $category)
                                <option>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="keyword" aria-describedby="inputGroupAppend">
                        <button class="btn btn-default input-group-append" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        {{ Form::close() }}
                    </div>

                    <div class="col-sm-2 d-none d-sm-block">
                        <div class="dropdown">
                            <div id="logo_number_cart_items">{{$cartNumberItems}}</div>
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                {{ HTML::image('img/cart_icon.png', 'cart image') }}
                                <span>cart</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/cart">My cart</a>
                                <a class="dropdown-item" href="#">Empty cart</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

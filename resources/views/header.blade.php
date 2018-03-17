<header>
    <div class="col-sm-6">
        <a href="#">{{ HTML::image('img/logo.png', 'logo', array('id' => 'header_logo')) }}</a>
    </div>

    <div class="col-sm-6 container header_right">
        <div class="row justify-content-end">
            {{ Form::open(array('url' => '')) }}
                <select class="custom-select" name="category">
                    <option selected>All</option>
                </select><!--
                --><input type="text" name="keyword"><!--
                --><button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
            {{ Form::close() }}

            <div class="dropdown">
                <div id="logo_number_cart_items">4</div>
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ HTML::image('img/cart_icon.png', 'cart image') }}
                    <span>cart</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Empty cart</a>
                </div>
            </div>
        </div>
    </div>

</header>

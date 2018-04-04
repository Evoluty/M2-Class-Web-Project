<footer class="container-fluid">
    <div class="row links">
        <div class="col-sm-8 container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>About us</h4>
                    <ul>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">Payments</a></li>
                        <li><a href="#">Saved Cards</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Cancellation & Returns</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Shipping</h4>
                    <ul>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Track your order</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Buy gift cards</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4 container">
            <h4>Newsletter Signup</h4>
                {{ Form::open(array('url' => '', 'class' => 'form-group')) }}
                    <div class="input-group">
                        <input type="text" name="email">
                        <button class="btn btn-default input-group-append" type="submit">
                            <i class="far fa-envelope"></i>
                        </button>
                    </div>
                {{ Form::close() }}
            <h4>Follow Us</h4>
            <span id="socials">
                <a href="#">{{ HTML::image('img/fb.png', 'fb') }}</a>
                <a href="#">{{ HTML::image('img/twitter.png', 'twitter') }}</a>
                <a href="#">{{ HTML::image('img/google.png', 'google') }}</a>
                <a href="#">{{ HTML::image('img/youtube.png', 'youtube') }}</a>
                <a href="#">{{ HTML::image('img/pinterest.png', 'pinterest') }}</a>
                <a href="#">{{ HTML::image('img/linkedin.png', 'linkedin') }}</a>
                <a href="#">{{ HTML::image('img/rss.png', 'rss') }}</a>
                <a href="#">{{ HTML::image('img/tumblr.png', 'tumblr') }}</a>
            </span>
        </div>
    </div>

    <div class="credits row">
        <div class="col-sm-10">
            <span>@ 2015</span>
        </div>
        <div class="col-sm-2">
            {{ HTML::image('img/credit_cards.png', 'logo') }}
        </div>
    </div>

</footer>

@extends('app')

@section('title', 'Home')

@section('content')

    <div class="container-fluid">
        <h3>Suggestions</h3>
        <div class="row">
            <div class="col-sm-2 d-none d-sm-block"></div>
            <div class="col-sm-8">

                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <div class="text-center">
                    @foreach($suggested as $item)
                        <div class="mySlides">
                            <img src="{{$item->picture_url}}" style="width:50%; max-height: 25em">
                        </div>
                    @endforeach
                    </div>
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    @php $i = 1 @endphp
                    @foreach($suggested as $item)
                        <span class="dot" onclick="currentSlide({{$i}})"></span>
                        @php $i++ @endphp
                    @endforeach
                </div>
            </div>
        </div>

        <script src="js/caroussel.js">

        </script>

        <h3>Our products</h3>
        @include('products._partial')
    </div>
@endsection

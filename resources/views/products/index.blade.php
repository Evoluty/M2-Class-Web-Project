@extends('app')

@section('title', $category)

@section('content')
    <div class="container-fluid">
        <h3>{{$category}}</h3>
        @include('products._partial')
    </div>
@endsection

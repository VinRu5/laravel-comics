@extends('templates.layoutBase')

@section('title', 'Home Page')

@section('content')
<div class="jumbotron-dc">
    <img src="/images/jumbotron.jpg" alt="jumbotron">
</div>
<div class="container comics">
    <div class="current-series">
        CURRENT SERIES
    </div>
    <div class="row justify-content-center">
        @foreach ($comics as $comic)
        <div class="col-6 col-md-3 col-lg-2 comic">
            <a href="{{ route('product', ['id' => $loop->iteration]) }}" class="comic-inner">
                <div class="img-container">
                    <img src="{{ $comic['thumb'] }}" alt="copertina">
                </div>
                <div class="comic-title">{{ $comic['series'] }}</div>
            </a>
        </div>
        @endforeach
        <button class="button-blue">LOAD MORE</button>
    </div>

</div>
@include('templates.buybar')


@endsection
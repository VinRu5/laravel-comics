@extends('templates.layoutBase')

@section('title', 'Home Page')

@section('content')
<div class="jumbotron-dc">
    <img src="/images/jumbotron.jpg" alt="jumbotron">
</div>

@php
$comicNow = $comics[$comicIndex]
@endphp

<div class="banner-blue">
    <div class="img-comics">
        <img src="{{ $comicNow['thumb'] }}" alt="">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-9">
            <h2>{{ $comicNow['title'] }}</h2>
            <div class="green-box">
                <div>U.S. Price</div>
                <div>{{ $comicNow['price'] }}</div>
                <div>AVAILABLE</div>
                <div>Check Available</div>
            </div>
        </div>
        <div class="col-3">
            <div>Advertisement</div>
            <div class="img-adv">
                <img src="/images/adv.jpg" alt="advertisement">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 talent">
            <h6>Talent</h6>
            <div>
                <div>Art by:</div>
                <div>
                    @foreach ($comicNow['artists'] as $artist)
                    @if ($loop->last)
                    {{ $artist }}
                    @else
                    {{ $artist }},
                    @endif
                    @endforeach

                </div>
            </div>
            <div>
                <div>Written by:</div>
                <div>
                    @foreach ($comicNow['writers'] as $writer)
                    @if ($loop->last)
                    {{ $writer }}
                    @else
                    {{ $writer }},
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-6 specs">
            <h6>Specs</h6>
            <div>
                <div>Series:</div>
                <div>
                    {{ $comicNow['series'] }}
                </div>
            </div>
            <div>
                <div>U.S. Price:</div>
                <div>
                    {{ $comicNow['price'] }}
                </div>
            </div>
            <div>
                <div>On Sale Date:</div>
                <div>
                    {{ $comicNow['sale_date'] }}
                </div>
            </div>

        </div>
    </div>


</div>

@endsection
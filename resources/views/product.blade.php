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
    <div class="container container-comics">
        <div class="img-comics">
            <img src="{{ $comicNow['thumb'] }}" alt="">
        </div>
    </div>
</div>
<div class="comics-info">
    <div class="container">

        <div class="row">
            <div class="col-9">
                <h2>{{ $comicNow['title'] }}</h2>
                <div class="green-container">
                    <div class="green-box green-left">
                        <div class="green-box-inner">
                            <div>U.S. Price</div>
                            <div>{{ $comicNow['price'] }}</div>

                        </div>
                        <div>AVAILABLE</div>
                    </div>
                    <div class="green-box">
                        <div>Check Available</div>

                    </div>
                </div>
                <div class="text-description">
                    {{ $comicNow['description'] }}
                </div>
            </div>
            <div class="col-3">
                <div class="text-adv">Advertisement</div>
                <div class="img-adv">
                    <img src="/images/adv.jpg" alt="advertisement">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="comics-details">
    <div class="container">
        <div class="row">
            <div class="col-6 talent">
                <h6 class="box-info">Talent</h6>
                <div class="box-info">
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
                <div class="box-info">
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
                </div class="box-info">
            </div>
            <div class="col-6 specs">
                <h6 class="box-info">Specs</h6>
                <div class="box-info">
                    <div>Series:</div>
                    <div>
                        {{ $comicNow['series'] }}
                    </div>
                </div>
                <div class="box-info">
                    <div>U.S. Price:</div>
                    <div>
                        {{ $comicNow['price'] }}
                    </div>
                </div>
                <div class="box-info">
                    <div>On Sale Date:</div>
                    <div>
                        {{ $comicNow['sale_date'] }}
                    </div>
                </div>

            </div>
        </div>


    </div>

</div>

@endsection
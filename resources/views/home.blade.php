@extends('templates.layoutBase')

@section('title', 'Home Page')

@section('content')
<div class="jumbotron-dc">
    <img src="/images/jumbotron.jpg" alt="jumbotron">
</div>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-2">
            <a href="{{ route('product', ['id' => $loop->iteration]) }}" class="card-container">
                <div class="img-container">
                    <img src="{{ $comic['thumb'] }}" alt="copertina">
                </div>
                <div class="title">{{ $comic['series'] }}</div>
            </a>
        </div>
        @endforeach
    </div>


</div>


@endsection
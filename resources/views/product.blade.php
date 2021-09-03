@extends('templates.layoutBase')

@section('title', 'Home Page')

@section('content')
<div class="jumbotron-dc">
    <img src="/images/jumbotron.jpg" alt="jumbotron">
</div>

@dump($comics[$comicIndex])

@endsection
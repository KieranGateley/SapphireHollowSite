@extends('layouts.container')

@section('title', "Welcome")

@section('content')
@foreach($news as $news_item)
    @include('partials.news.card', ['news' => $news_item])
    <p></p>
@endforeach
@endsection

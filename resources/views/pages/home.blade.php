@extends('layouts.container')

@section('title', "Welcome")

@section('content')
@foreach($articles as $article)
    @include('partials.article.card', ['article' => $article])
    <p></p>
@endforeach
@endsection

@extends('layouts.container')

@section('title', 'Create Article')

@section('content')
    @include('partials.article.form', ['action' => route('create_article')])
@endsection

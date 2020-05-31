@extends('layouts.container')

@section('title', 'Create News Item')

@section('content')
    @include('partials.news.form', ['action' => route('create_news')])
@endsection

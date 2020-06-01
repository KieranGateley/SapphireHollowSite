@extends('layouts.container')

@section('title', 'Update Article')

@section('content')
    @include('partials.article.form', ['action' => route('edit_article', ['article' => $article]), 'article' => $article])
@endsection

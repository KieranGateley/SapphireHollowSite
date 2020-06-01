@extends('layouts.container')

@section('title', 'Create Article')

@section('content')
    @include('partials.article.max', [
                'title' => $article->title,
                'body' => $article->body,
                'user' => $article->author,
                'date' => $article->updated_at,
             ])
@endsection

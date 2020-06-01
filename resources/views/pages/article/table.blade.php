@extends('layouts.container')

@section('title', 'All Articles')

@section('scripts')
    $(document).ready(function(){ $('#articles').DataTable(); });
@endsection

@section('content')
    <table id="articles" style="width: 100%;" class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
        </thead>
        @foreach ($article as $article)
            @include('partials.article.row', [ 'article' => $article, ])
        @endforeach
    </table>
@endsection

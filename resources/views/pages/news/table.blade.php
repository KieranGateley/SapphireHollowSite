@extends('layouts.container')

@section('title', 'All News Articles')

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
        @foreach ($news as $news_item)
            @include('partials.news.row', [ 'news' => $news_item, ])
        @endforeach
    </table>
@endsection

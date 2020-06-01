<div class="news" style="border: 2px solid black; border-radius: 5px; padding-left: 5px; padding-right: 5px">
    <div id="header" class="border-bottom"><b>{{ $article->title }}</b></div>
    <div id="body">{!! Str::words($article->body, $limit=50, $end='...') ?? "" !!}</div>
    <div id="footer" class="border-top">
        <div id="info" class="text-left" style="width: 70%; display: inline-block">
            Posted at {{ $article->created_at }}.
            @if($article->created_at != $article->updated_at)
                 Last Updated at {{ $article->updated_at }}
            @endif
        </div>
        <div class="text-right" style="width: 29%; display: inline-block">
            <a href="{{ route('view_article', ['article' => $article, ]) }}">Read more...</a>
        </div>
    </div>
</div>

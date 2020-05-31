<form action="{{ $action }}" method="POST">
    @csrf
    <div id="form-group">
        <label for="title-input">Post Title</label>
        <input name="title" type="text" id="title-input" value="{{ $news->title ?? "" }}" class="form-control"/>
    </div>
    <p></p>
    <div id="form-group">
        <label for="body-input">Post Body</label>
        <input id="body-input" type="hidden" name="body" value="{!! $news->body ?? "" !!}">
        @include('partials.trix-bar')
        <trix-editor input="body-input" toolbar="trix-toolbar-custom"></trix-editor>
    </div>
    <p></p>
    <div id="form-group">
        <input type="submit" value="Create News Post" class="btn btn-primary"/>
    </div>
</form>

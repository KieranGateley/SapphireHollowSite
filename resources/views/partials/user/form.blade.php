<form action="{{ $action }}" method="POST">
    @csrf
    <div id="form-group">
        <label for="name-input">Name</label>
        <input name="name" type="text" id="name-input" value="{{ $user->name ?? "" }}" class="form-control"/>
    </div>
    <p></p>
    <div id="form-group">
        <label for="email-input">Email Address</label>
        <input name="email" type="text" id="email-input" value="{{ $user->email ?? "" }}" class="form-control"
        @if(!Auth::user()->role->administrator)
            disabled
        @endif
        />
    </div>
    <p></p>
    <div class="d-flex justify-content-between">
        <div id="form-group">
            <input type="submit" value="Update Account" class="btn btn-primary"/>
        </div>
        <a class="btn btn-light" href="{{ route('home') }}">Change Password</a>
    </div>
</form>

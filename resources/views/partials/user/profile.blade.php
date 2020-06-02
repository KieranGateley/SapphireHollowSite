
<div class="profile">
    @if($user->email == 'root@localhost')
        <img src="{{ asset('default-icon.png') }}" alt="{{ $user->name }}" class="profile" style="width:200px;height:200px;">
    @else
        <img src="{{ Gravatar::fallback(asset('default-icon.png'), ['size' => 200])->get($user->email, ['size' => 200]) }}" alt="{{ $user->name }}" class="profile" style="width:200px;height:200px;">
    @endif

    <div style="font-size: 30px">{{ $user->name ?? "No User Logged In" }}</div>
</div>

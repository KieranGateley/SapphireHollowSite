@extends('layouts.container')

@section('title', $user->name . '\'s Profile')

@section('content')
    @include('partials.user.profile', ['user' => $user, ])
@endsection

@extends('layouts.container')

@section('title', 'User Profile')

@section('content')
    @include('partials.user.profile', ['user' => $user, ])
@endsection

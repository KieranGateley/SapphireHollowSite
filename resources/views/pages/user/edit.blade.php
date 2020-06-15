@extends('layouts.container')

@section('title', 'Edit User')

@section('content')
    @include('partials.user.form', ['action' => route('edit_user', ['user' => $user])])
@endsection

@extends('products.layout')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        @include('users.form', ['user' => $user])
        <button class="btn btn-primary">Update</button>
    </form>
@endsection

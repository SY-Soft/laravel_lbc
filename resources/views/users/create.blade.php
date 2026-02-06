@extends('products.layout')

@section('content')
    <h1>Create User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @include('users.form')
        <button class="btn btn-success">Create</button>
    </form>
@endsection

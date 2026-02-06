@extends('products.layout')

@section('content')
    <h1>Users</h1>

    @foreach ($users as $user)
        <div>
            {{ $user->id }} — {{ $user->name }} ({{ $user->email }})
            <a href="/users/{{ $user->id }}">view</a>
            <a href="/users/{{ $user->id }}/edit">edit</a>

            <form action="/users/{{ $user->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Delete?')">delete</button>
            </form>
        </div>
    @endforeach
@endsection

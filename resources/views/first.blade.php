@extends('products.layout')

@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="row my-4">
        <div class="col-12 center">
            <a href="{{ route('products.index') }}" class="btn btn-success">Products</a>
        </div>
    </div>

@endsection 

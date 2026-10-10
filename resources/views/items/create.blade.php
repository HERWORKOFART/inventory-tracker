@extends('layout')

@section('content')
<h2>Add Item</h2>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    @include('items._form')
</form>
@endsection
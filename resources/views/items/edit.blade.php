@extends('layout')

@section('content')
<h2>Edit Item</h2>
<form action="{{ route('items.update', $item) }}" method="POST">
    @csrf
    @method('PUT')
    @include('items._form')
</form>
@endsection
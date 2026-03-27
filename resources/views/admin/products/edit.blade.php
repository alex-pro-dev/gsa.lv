@extends('admin.layouts.app')

@section('content')
<h1 class="h4">Edit Product for "{{ $service->title }}"</h1>
<form method="POST" action="{{ route('admin.services.products.update', [$service, $product]) }}" class="card card-body mb-3" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.products._form')
    <button class="btn btn-dark mt-3">Update</button>
</form>
<form method="POST" action="{{ route('admin.services.products.destroy', [$service, $product]) }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-outline-danger">Delete</button>
</form>
@endsection

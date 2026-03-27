@extends('admin.layouts.app')

@section('content')
<h1 class="h4">Create Product for "{{ $service->title }}"</h1>
<form method="POST" action="{{ route('admin.services.products.store', $service) }}" class="card card-body" enctype="multipart/form-data">
    @csrf
    @include('admin.products._form')
    <button class="btn btn-dark mt-3">Create</button>
</form>
@endsection

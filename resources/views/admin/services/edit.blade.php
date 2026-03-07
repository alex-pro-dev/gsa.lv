@extends('admin.layouts.app')
@section('content')
<h1 class="h4">Edit Service</h1>
<form method="POST" action="{{ route('admin.services.update', $service) }}" class="card card-body mb-3">@csrf @method('PUT')
@include('admin.services._form')
<button class="btn btn-dark">Update</button>
</form>
<form method="POST" action="{{ route('admin.services.destroy', $service) }}">@csrf @method('DELETE')<button class="btn btn-outline-danger">Delete</button></form>
@endsection

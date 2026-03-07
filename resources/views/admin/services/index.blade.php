@extends('admin.layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3"><h1 class="h4 mb-0">Services</h1><a class="btn btn-dark" href="{{ route('admin.services.create') }}">Add Service</a></div>
<div class="card"><div class="table-responsive"><table class="table mb-0">
<thead><tr><th>Title</th><th>Icon</th><th>Order</th><th>Status</th><th></th></tr></thead>
<tbody>
@foreach($services as $service)
<tr><td>{{ $service->title }}</td><td>{{ $service->icon }}</td><td>{{ $service->sort_order }}</td><td>{{ $service->is_active ? 'Active':'Hidden' }}</td><td class="text-end"><a class="btn btn-sm btn-outline-dark" href="{{ route('admin.services.edit', $service) }}">Edit</a></td></tr>
@endforeach
</tbody></table></div></div>
@endsection

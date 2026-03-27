@extends('admin.layouts.app')
@section('content')
<h1 class="h4">Edit Service</h1>
<form method="POST" action="{{ route('admin.services.update', $service) }}" class="card card-body mb-3">@csrf @method('PUT')
@include('admin.services._form')
<button class="btn btn-dark">Update</button>
</form>

<div class="card card-body mb-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5 mb-0">Products for this service</h2>
        <a href="{{ route('admin.services.products.create', $service) }}" class="btn btn-sm btn-dark">Add Product</a>
    </div>

    @if($service->products->isEmpty())
        <p class="text-muted mb-0">No products yet for this service.</p>
    @else
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th class="text-end"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($service->products as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->sort_order }}</td>
                            <td>{{ $product->is_active ? 'Active' : 'Hidden' }}</td>
                            <td class="text-end"><a class="btn btn-sm btn-outline-dark" href="{{ route('admin.services.products.edit', [$service, $product]) }}">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

<form method="POST" action="{{ route('admin.services.destroy', $service) }}">@csrf @method('DELETE')<button class="btn btn-outline-danger">Delete</button></form>
@endsection

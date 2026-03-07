@extends('admin.layouts.app')
@section('content')
<h1 class="h4">Create Service</h1>
<form method="POST" action="{{ route('admin.services.store') }}" class="card card-body">@csrf
@include('admin.services._form')
<button class="btn btn-dark">Create</button>
</form>
@endsection

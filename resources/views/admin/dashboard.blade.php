@extends('admin.layouts.app')
@section('content')
<h1 class="h3">Dashboard</h1>
<div class="row g-3 my-1">
    <div class="col-md-4"><div class="card p-3"><strong>{{ $messagesCount }}</strong><span>Contact messages</span></div></div>
    <div class="col-md-4"><div class="card p-3"><strong>{{ $unreadLikeCount }}</strong><span>Received today</span></div></div>
    <div class="col-md-4"><div class="card p-3"><strong>{{ $servicesCount }}</strong><span>Services</span></div></div>
</div>
<div class="d-flex flex-wrap gap-2 mt-3">
    <a href="{{ route('admin.homepage-settings.edit') }}" class="btn btn-outline-dark">Homepage Content</a>
    <a href="{{ route('admin.services.index') }}" class="btn btn-outline-dark">Services</a>
    <a href="{{ route('admin.contact-details.edit') }}" class="btn btn-outline-dark">Contact Details</a>
    <a href="{{ route('admin.contact-messages.index') }}" class="btn btn-outline-dark">Contact Messages</a>
</div>
@endsection

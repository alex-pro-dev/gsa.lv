@extends('admin.layouts.app')
@section('content')
<h1 class="h4">Message #{{ $contactMessage->id }}</h1>
<div class="card card-body">
    <p><strong>Name:</strong> {{ $contactMessage->name }}</p>
    <p><strong>Phone:</strong> {{ $contactMessage->phone }}</p>
    <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
    <p><strong>Subject:</strong> {{ $contactMessage->subject }}</p>
    <p><strong>Message:</strong><br>{{ $contactMessage->message }}</p>
</div>
<form class="mt-3" method="POST" action="{{ route('admin.contact-messages.destroy', $contactMessage) }}">@csrf @method('DELETE')<button class="btn btn-outline-danger">Delete message</button></form>
@endsection

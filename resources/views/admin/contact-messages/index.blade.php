@extends('admin.layouts.app')
@section('content')
<h1 class="h4 mb-3">Contact Messages</h1>
<div class="card"><div class="table-responsive"><table class="table mb-0"><thead><tr><th>Date</th><th>Name</th><th>Subject</th><th></th></tr></thead><tbody>
@foreach($messages as $message)
<tr><td>{{ $message->created_at->format('Y-m-d H:i') }}</td><td>{{ $message->name }}</td><td>{{ $message->subject }}</td><td class="text-end"><a href="{{ route('admin.contact-messages.show', $message) }}" class="btn btn-sm btn-outline-dark">Open</a></td></tr>
@endforeach
</tbody></table></div></div>
<div class="mt-3">{{ $messages->links() }}</div>
@endsection

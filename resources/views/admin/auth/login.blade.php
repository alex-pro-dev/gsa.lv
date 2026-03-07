@extends('admin.layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h1 class="h4 mb-3">Admin Login</h1>
                <form method="POST" action="{{ route('admin.login.store') }}">@csrf
                    <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" value="{{ old('email') }}" required></div>
                    <div class="mb-3"><label>Password</label><input type="password" name="password" class="form-control" required></div>
                    @error('email')<div class="text-danger small mb-2">{{ $message }}</div>@enderror
                    <button class="btn btn-dark w-100">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

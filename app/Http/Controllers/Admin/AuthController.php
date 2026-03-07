<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function create(): View
    {
        return view('admin.auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        if (! Auth::attempt($request->validated())) {
            return back()->withErrors(['email' => 'Invalid credentials provided.'])->onlyInput('email');
        }

        $request->session()->regenerate();

        if (! $request->user()?->is_admin) {
            Auth::logout();

            return back()->withErrors(['email' => 'You do not have access to the admin panel.']);
        }

        return redirect()->route('admin.dashboard');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}

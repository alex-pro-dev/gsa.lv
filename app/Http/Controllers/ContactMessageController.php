<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;

class ContactMessageController extends Controller
{
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        if ($request->filled('website')) {
            return back()->with('status', 'Thank you! We will contact you shortly.');
        }

        $data = $request->safe()->except('website');

        ContactMessage::query()->create([
            ...$data,
            'ip_address' => $request->ip(),
        ]);

        return back()->with('status', 'Your request has been sent successfully.');
    }
}

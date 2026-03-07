<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateContactDetailRequest;
use App\Models\ContactDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactDetailController extends Controller
{
    public function edit(): View
    {
        return view('admin.contact-details.edit', [
            'contactDetail' => ContactDetail::query()->firstOrFail(),
        ]);
    }

    public function update(UpdateContactDetailRequest $request): RedirectResponse
    {
        ContactDetail::query()->firstOrFail()->update($request->validated());

        return back()->with('status', 'Contact details updated.');
    }
}

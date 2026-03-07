<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateHomepageSettingRequest;
use App\Models\HomepageSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomepageSettingController extends Controller
{
    public function edit(): View
    {
        return view('admin.homepage-settings.edit', [
            'setting' => HomepageSetting::query()->firstOrFail(),
        ]);
    }

    public function update(UpdateHomepageSettingRequest $request): RedirectResponse
    {
        $payload = $request->validated();

        foreach (['show_about', 'show_services', 'show_why_choose', 'show_process', 'show_contact'] as $toggle) {
            $payload[$toggle] = $request->boolean($toggle);
        }

        HomepageSetting::query()->firstOrFail()->update($payload);

        return back()->with('status', 'Homepage settings updated.');
    }
}

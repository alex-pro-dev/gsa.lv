<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Service;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard', [
            'messagesCount' => ContactMessage::query()->count(),
            'unreadLikeCount' => ContactMessage::query()->whereDate('created_at', now()->toDateString())->count(),
            'servicesCount' => Service::query()->count(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function show(Service $service): View
    {
        $service->load([
            'products' => fn ($query) => $query->where('is_active', true),
        ]);

        abort_if($service->products->isEmpty(), 404);

        return view('services.show', [
            'service' => $service,
        ]);
    }
}

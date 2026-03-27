<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function create(Service $service): View
    {
        return view('admin.products.create', compact('service'));
    }

    public function store(StoreProductRequest $request, Service $service): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('products/images', 'public');
        }

        if ($request->hasFile('specification')) {
            $data['specification_path'] = $request->file('specification')->store('products/specifications', 'public');
        }

        $service->products()->create([
            ...$data,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.services.edit', $service)->with('status', 'Product created successfully.');
    }

    public function edit(Service $service, Product $product): View
    {
        abort_unless($product->service_id === $service->id, 404);

        return view('admin.products.edit', compact('service', 'product'));
    }

    public function update(UpdateProductRequest $request, Service $service, Product $product): RedirectResponse
    {
        abort_unless($product->service_id === $service->id, 404);

        $data = $request->validated();

        if ($request->boolean('remove_image') && $product->image_path) {
            Storage::disk('public')->delete($product->image_path);
            $data['image_path'] = null;
        }

        if ($request->hasFile('image')) {
            if ($product->image_path) {
                Storage::disk('public')->delete($product->image_path);
            }

            $data['image_path'] = $request->file('image')->store('products/images', 'public');
        }

        if ($request->boolean('remove_specification') && $product->specification_path) {
            Storage::disk('public')->delete($product->specification_path);
            $data['specification_path'] = null;
        }

        if ($request->hasFile('specification')) {
            if ($product->specification_path) {
                Storage::disk('public')->delete($product->specification_path);
            }

            $data['specification_path'] = $request->file('specification')->store('products/specifications', 'public');
        }

        $product->update([
            ...$data,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.services.edit', $service)->with('status', 'Product updated successfully.');
    }

    public function destroy(Service $service, Product $product): RedirectResponse
    {
        abort_unless($product->service_id === $service->id, 404);

        if ($product->image_path) {
            Storage::disk('public')->delete($product->image_path);
        }

        if ($product->specification_path) {
            Storage::disk('public')->delete($product->specification_path);
        }

        $product->delete();

        return redirect()->route('admin.services.edit', $service)->with('status', 'Product deleted successfully.');
    }
}

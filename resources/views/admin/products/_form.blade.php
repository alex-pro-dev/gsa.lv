<div class="mb-3">
    <label class="form-label">Title</label>
    <input class="form-control" name="title" value="{{ old('title', $product->title ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Description (Markdown supported)</label>
    <textarea class="form-control" rows="6" name="description" required>{{ old('description', $product->description ?? '') }}</textarea>
</div>
<div class="row g-3">
    <div class="col-md-4">
        <label class="form-label">Sort order</label>
        <input type="number" min="0" class="form-control" name="sort_order" value="{{ old('sort_order', $product->sort_order ?? 0) }}">
    </div>
    <div class="col-md-4 d-flex align-items-end">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" @checked(old('is_active', $product->is_active ?? true))>
            <label class="form-check-label">Active</label>
        </div>
    </div>
</div>
<div class="mt-3">
    <label class="form-label">Image</label>
    <input type="file" class="form-control" name="image" accept="image/*">
    @if(!empty($product?->image_path))
        <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" name="remove_image" value="1" id="remove_image">
            <label class="form-check-label" for="remove_image">Remove current image</label>
        </div>
        <div class="mt-2"><a href="{{ asset('storage/'.$product->image_path) }}" target="_blank">View current image</a></div>
    @endif
</div>
<div class="mt-3">
    <label class="form-label">Specification document</label>
    <input type="file" class="form-control" name="specification" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt">
    @if(!empty($product?->specification_path))
        <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" name="remove_specification" value="1" id="remove_specification">
            <label class="form-check-label" for="remove_specification">Remove current specification</label>
        </div>
        <div class="mt-2"><a href="{{ asset('storage/'.$product->specification_path) }}" target="_blank">View current specification</a></div>
    @endif
</div>

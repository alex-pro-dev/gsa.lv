<div class="mb-3"><label>Title</label><input class="form-control" name="title" value="{{ old('title', $service->title ?? '') }}" required></div>
<div class="row g-3">
<div class="col-md-4"><label>Bootstrap icon</label><input class="form-control" name="icon" value="{{ old('icon', $service->icon ?? 'bi-grid') }}" required></div>
<div class="col-md-4"><label>Sort order</label><input type="number" class="form-control" name="sort_order" value="{{ old('sort_order', $service->sort_order ?? 0) }}"></div>
<div class="col-md-4 d-flex align-items-end"><div class="form-check"><input class="form-check-input" type="checkbox" name="is_active" value="1" @checked(old('is_active', $service->is_active ?? true))><label class="form-check-label">Active</label></div></div>
</div>
<div class="my-3"><label>Description</label><textarea class="form-control" rows="4" name="description" required>{{ old('description', $service->description ?? '') }}</textarea></div>

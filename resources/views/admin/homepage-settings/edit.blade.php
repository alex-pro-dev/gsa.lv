@extends('admin.layouts.app')
@section('content')
<h1 class="h4 mb-3">Homepage Settings</h1>
<form method="POST" action="{{ route('admin.homepage-settings.update') }}" class="card card-body">@csrf @method('PUT')
    <div class="mb-3"><label>Hero title</label><input class="form-control" name="hero_title" value="{{ old('hero_title', $setting->hero_title) }}"></div>
    <div class="mb-3"><label>Hero subtitle</label><textarea class="form-control" name="hero_subtitle" rows="3">{{ old('hero_subtitle', $setting->hero_subtitle) }}</textarea></div>
    <div class="row g-3">
        <div class="col-md-6"><label>Primary CTA</label><input class="form-control" name="hero_primary_cta" value="{{ old('hero_primary_cta', $setting->hero_primary_cta) }}"></div>
        <div class="col-md-6"><label>Secondary CTA</label><input class="form-control" name="hero_secondary_cta" value="{{ old('hero_secondary_cta', $setting->hero_secondary_cta) }}"></div>
    </div>
    <div class="my-3"><label>About text</label><textarea class="form-control" name="about_content" rows="6">{{ old('about_content', $setting->about_content) }}</textarea></div>
    <div class="row row-cols-2 row-cols-md-5 g-2">
        @foreach(['show_about'=>'About','show_services'=>'Services','show_why_choose'=>'Why Choose','show_process'=>'Process','show_contact'=>'Contact'] as $field=>$label)
            <div class="form-check"><input class="form-check-input" type="checkbox" name="{{ $field }}" value="1" @checked(old($field, $setting->{$field}))><label class="form-check-label">{{ $label }}</label></div>
        @endforeach
    </div>
    <button class="btn btn-dark mt-3">Save settings</button>
</form>
@endsection

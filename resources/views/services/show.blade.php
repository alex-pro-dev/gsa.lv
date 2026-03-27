@extends('layouts.app')

@section('content')
@include('partials.site-header')

<section class="hero-section service-page-hero py-5">
    <div class="container py-5 mt-5">
        <div class="row">
            <div class="col-lg-8" data-animate>
                <a href="{{ route('home') }}#services" class="text-decoration-none text-gold"><i class="bi bi-arrow-left"></i> Back to services</a>
                <div class="d-flex align-items-center gap-3 mt-3">
                    <i class="bi {{ $service->icon }} service-icon service-icon-lg"></i>
                    <h1 class="display-5 fw-bold mb-0">{{ $service->title }}</h1>
                </div>
                <p class="lead text-light-emphasis mt-3">{{ $service->description }}</p>
            </div>
        </div>
    </div>
</section>

<section class="section-dark py-5">
    <div class="container">
        <h2 class="section-title" data-animate>Related Products</h2>
        <div class="row g-4 mt-1">
            @foreach($service->products as $product)
                <div class="col-md-6" data-animate>
                    <article class="glass-card h-100">
                        @if($product->image_path)
                            <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->title }}" class="img-fluid rounded mb-3 product-image">
                        @endif
                        <h3 class="h4">{{ $product->title }}</h3>
                        <div class="product-description text-light-emphasis">{!! \Illuminate\Support\Str::markdown($product->description) !!}</div>
                        @if($product->specification_path)
                            <a href="{{ asset('storage/'.$product->specification_path) }}" class="btn btn-gold mt-3" download>
                                <i class="bi bi-download"></i> Download specification
                            </a>
                        @endif
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.site-footer')
@endsection

@extends('layouts.app')

@section('content')
<nav id="mainNav" class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm border-bottom border-warning-subtle">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#hero">
            <img src="{{ asset('images/gsa-logo.png') }}" alt="GSA Production Logo" class="logo" onerror="this.style.display='none'">
            <span class="brand-text">GSA Production</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @foreach (['about' => 'About', 'services' => 'Services', 'why-choose' => 'Why Us', 'process' => 'Process', 'contact' => 'Contact'] as $id => $label)
                    <li class="nav-item"><a class="nav-link" href="#{{ $id }}">{{ $label }}</a></li>
                @endforeach
            </ul>
            <div class="d-flex align-items-center gap-2 ms-lg-3">
                <button class="btn btn-theme-toggle" id="themeToggle" type="button" aria-label="Toggle color theme" aria-pressed="false">
                    <i class="bi bi-sun-fill theme-icon-light" aria-hidden="true"></i>
                    <i class="bi bi-moon-stars-fill theme-icon-dark" aria-hidden="true"></i>
                </button>
                <a href="#contact" class="btn btn-gold">Get a Quote</a>
            </div>
        </div>
    </div>
</nav>

<header id="hero" class="hero-section">
    <div class="container py-5">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8" data-animate>
                <p class="text-gold fw-semibold text-uppercase tracking">Industrial Premium Solutions</p>
                <h1 class="display-4 fw-bold mb-3">{{ $settings->hero_title }}</h1>
                <p class="lead text-light-emphasis mb-4">{{ $settings->hero_subtitle }}</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#contact" class="btn btn-gold btn-lg">{{ $settings->hero_primary_cta }}</a>
                    <a href="#services" class="btn btn-outline-light btn-lg">{{ $settings->hero_secondary_cta }}</a>
                </div>
                <div class="trust-grid mt-5">
                    <div><strong>Since 2006</strong><span>Manufacturing Excellence</span></div>
                    <div><strong>EU Ready</strong><span>Standards Compliant</span></div>
                    <div><strong>End-to-End</strong><span>Design to Delivery</span></div>
                </div>
            </div>
        </div>
    </div>
</header>

@if($settings->show_about)
<section id="about" class="section-dark py-5">
    <div class="container" data-animate>
        <h2 class="section-title">About GSA Production</h2>
        <p class="section-text">{{ $settings->about_content }}</p>
    </div>
</section>
@endif

@if($settings->show_services)
<section id="services" class="section-gradient py-5">
    <div class="container">
        <h2 class="section-title" data-animate>Our Products & Services</h2>
        <div class="row g-4 mt-1">
            @foreach($services as $service)
                <div class="col-md-6 col-lg-4" data-animate>
                    <article class="glass-card h-100">
                        <i class="bi {{ $service->icon }} service-icon"></i>
                        <h3 class="h5 mt-3">{{ $service->title }}</h3>
                        <p class="text-light-emphasis">{{ $service->description }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if($settings->show_why_choose)
<section id="why-choose" class="section-dark py-5">
    <div class="container">
        <h2 class="section-title" data-animate>Why Choose Us</h2>
        <div class="row g-4 mt-1">
            @foreach($benefits as $benefit)
                <div class="col-md-6 col-lg-4" data-animate>
                    <div class="benefit-item h-100">
                        <i class="bi {{ $benefit['icon'] }}"></i>
                        <h3 class="h5">{{ $benefit['title'] }}</h3>
                        <p class="mb-0 text-light-emphasis">{{ $benefit['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if($settings->show_process)
<section id="process" class="section-gradient py-5">
    <div class="container">
        <h2 class="section-title" data-animate>Production Workflow</h2>
        <div class="timeline mt-4">
            @foreach($processSteps as $step)
                <div class="timeline-step" data-animate>
                    <span class="timeline-index">{{ $loop->iteration }}</span>
                    <h3 class="h6 mb-0">{{ $step }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if($settings->show_contact)
<section id="contact" class="section-dark py-5">
    <div class="container">
        <h2 class="section-title" data-animate>Contact Us</h2>
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <div class="row g-4">
            <div class="col-lg-7" data-animate>
                <form class="glass-card" method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6"><input class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required></div>
                        <div class="col-md-6"><input class="form-control" name="phone" placeholder="Phone" value="{{ old('phone') }}" required></div>
                        <div class="col-md-6"><input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required></div>
                        <div class="col-md-6"><input class="form-control" name="subject" placeholder="Subject" value="{{ old('subject') }}" required></div>
                        <div class="col-12"><textarea class="form-control" rows="5" name="message" placeholder="Message" required>{{ old('message') }}</textarea></div>
                        <div class="col-12 d-none"><input name="website" tabindex="-1" autocomplete="off"></div>
                        <div class="col-12"><button class="btn btn-gold" type="submit">Send Message</button></div>
                    </div>
                </form>
                @if($errors->any())
                    <div class="alert alert-danger mt-3">Please check the form and try again.</div>
                @endif
            </div>
            <div class="col-lg-5" data-animate>
                <div class="contact-card h-100">
                    <p><i class="bi bi-geo-alt-fill text-gold"></i> {{ $contact->address }}</p>
                    <p><strong>Aluminum Systems:</strong><br>{{ $contact->aluminum_phone }} · {{ $contact->aluminum_email }}</p>
                    <p><strong>PVC Systems:</strong><br>{{ $contact->pvc_phone }} · {{ $contact->pvc_email }}</p>
                    <p><strong>Sales Department:</strong><br>{{ $contact->sales_phone }} · {{ $contact->sales_email }}</p>
                    <p><strong>Working Hours:</strong><br>{{ $contact->working_hours_weekdays }}<br>{{ $contact->working_hours_weekend }}</p>
                </div>
            </div>
        </div>
        <div class="map-frame mt-4" data-animate>
            @if($contact->map_embed_url)
                <iframe src="{{ $contact->map_embed_url }}" width="100%" height="300" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            @else
                <div class="placeholder">Map placeholder — add an embed URL from admin panel.</div>
            @endif
        </div>
    </div>
</section>
@endif

<footer class="py-4 border-top border-secondary-subtle bg-black">
    <div class="container d-flex flex-column flex-md-row justify-content-between gap-3">
        <div>
            <strong>GSA Production</strong>
            <p class="mb-0 text-light-emphasis">© {{ date('Y') }} All rights reserved.</p>
        </div>
        <div class="small text-light-emphasis">
            <a href="#hero" class="text-decoration-none text-light-emphasis me-2">Top</a>
            <a href="#services" class="text-decoration-none text-light-emphasis me-2">Services</a>
            <a href="#contact" class="text-decoration-none text-light-emphasis">Contact</a>
        </div>
    </div>
</footer>
@endsection

<nav id="mainNav" class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm border-bottom border-warning-subtle">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}#hero">
            <img src="{{ asset('images/gsa-logo.png') }}" alt="GSA Production Logo" class="logo" onerror="this.style.display='none'">
            <span class="brand-text">GSA Production</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @foreach (['about' => 'About', 'services' => 'Services', 'why-choose' => 'Why Us', 'process' => 'Process', 'contact' => 'Contact'] as $id => $label)
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#{{ $id }}">{{ $label }}</a></li>
                @endforeach
            </ul>
            <div class="d-flex align-items-center gap-2 ms-lg-3">
                <button class="btn btn-theme-toggle" id="themeToggle" type="button" aria-label="Toggle color theme" aria-pressed="false">
                    <i class="bi bi-sun-fill theme-icon-light" aria-hidden="true"></i>
                    <i class="bi bi-moon-stars-fill theme-icon-dark" aria-hidden="true"></i>
                </button>
                <a href="{{ route('home') }}#contact" class="btn btn-gold">Get a Quote</a>
            </div>
        </div>
    </div>
</nav>

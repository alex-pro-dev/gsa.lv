<footer class="site-footer py-4 border-top border-secondary-subtle">
    <div class="container d-flex flex-column flex-md-row justify-content-between gap-3">
        <div>
            <strong>GSA Production</strong>
            <p class="mb-0 footer-muted">© {{ date('Y') }} All rights reserved.</p>
        </div>
        <div class="small footer-muted">
            <a href="{{ route('home') }}#hero" class="text-decoration-none me-2">Top</a>
            <a href="{{ route('home') }}#services" class="text-decoration-none me-2">Services</a>
            <a href="{{ route('home') }}#contact" class="text-decoration-none">Contact</a>
        </div>
    </div>
</footer>

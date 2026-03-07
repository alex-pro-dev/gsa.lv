# GSA Production — Laravel One-Page Corporate Website

Premium one-page corporate website starter for **gsa.lv** built with Laravel 12, MySQL, Bootstrap 5, Blade, and a simple admin panel.

## Tech Stack

- Laravel 12 (PHP 8.2+)
- MySQL
- Blade templating
- Bootstrap 5 + custom Material-inspired dark/gold UI
- Vite for assets

## Features

- Modern, responsive one-page landing website
- Sticky navigation, hero, about, services, benefits, process, contact, footer
- Contact form with validation, CSRF protection, honeypot anti-spam, and DB storage
- Admin authentication (email/password)
- Admin dashboard to manage:
  - Hero and About content
  - Section visibility toggles
  - Service cards CRUD
  - Contact details
  - Contact message inbox
- Database migrations + seeders with realistic demo content

## Database Schema Overview

- `users` (admin accounts via `is_admin` flag)
- `homepage_settings` (hero/about content + section toggles)
- `services` (service cards)
- `contact_details` (address, departments, working hours, map URL)
- `contact_messages` (website contact form submissions)

## Local Setup

1. Install dependencies:
   ```bash
   composer install
   npm install
   ```
2. Create environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Configure MySQL credentials in `.env`.
4. Run migrations and seeders:
   ```bash
   php artisan migrate:fresh --seed
   ```
5. Build frontend assets:
   ```bash
   npm run build
   ```
6. Serve app:
   ```bash
   php artisan serve
   ```

## Admin Access

- URL: `/admin/login`
- Email: `admin@gsa.lv`
- Password: `password`

## Logo Placement

Place the company logo file at:

- `public/images/gsa-logo.png`

The frontend navbar is already configured to load it from this location.

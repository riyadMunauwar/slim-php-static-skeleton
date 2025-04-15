# Static Site PHP Framework

## Features
- Slim PHP 4 based framework
- Dependency Injection
- Component-based view system
- Easy routing
- Static site development focused

## Requirements
- PHP 8.0+
- Composer

## Installation
1. Clone the repository
2. Run `composer install`
3. Run `composer start`

## Folder Structure
- `app/`: Core application logic
- `public/`: Web entry point and assets
- `routes/`: Application routes
- `app/Views/`: 
  - `components/`: Reusable UI components
  - `layouts/`: Page layouts
  - `pages/`: Individual page templates

## Adding New Pages
1. Create a method in `PageController`
2. Add a route in `routes/web.php`
3. Create a corresponding view in `app/Views/pages/`

## Best Practices
- Use components for reusable UI elements
- Keep logic in controllers
- Use layouts for consistent page structure
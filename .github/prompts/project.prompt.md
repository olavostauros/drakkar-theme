# Drakkar WordPress Theme

## Overview

Custom WordPress theme for **Drakkar Agricultura de Precisão** - a Brazilian precision agriculture technology company targeting farmers and agricultural professionals.

## Tech Stack

- **Environment**: Windows 11, PowerShell, VS Code
- **Backend**: WordPress, PHP, WP-CLI, Composer
- **Frontend**: HTML5, CSS, JavaScript (vanilla)
- **Server**: PHP built-in (`php -S localhost:8000`)

## Design Reference

See `HOME.png` for homepage design featuring:

- Hero: Agricultural field background, farmer with tablet
- Heading: "Chegou a nova era da Agricultura de Precisão"
- CTA: "Conheça a plataforma"
- Navigation: Lavoura Online, Agricultura de Precisão, Histórias de Sucesso, A Drakkar, Newsletter
- Stats: 1M+ samples, 1.2K+ clients, 5M+ hectares, 3.7K+ farms, 1.5M+ maps/year

## Requirements

### Core Features

- Responsive homepage matching design reference
- Navigation menu with custom logo
- Hero section with background image and CTA
- Animated statistics counters
- WhatsApp floating button integration

### WordPress Integration

- Theme directory: `wp-content/themes/drakkar/`
- Standard files: `style.css`, `index.php`, `functions.php`, `header.php`, `footer.php`, `front-page.php`
- Theme supports: custom logos, menus, featured images
- Customizer options for easy content management

### Design System

- **Colors**: Agricultural greens, earth tones, red/orange accents
- **Typography**: Modern sans-serif, clear hierarchy
- **Layout**: Mobile-first responsive, CSS Grid/Flexbox

## Development Commands

- Start server: `php -S localhost:8000` (VS Code task available)
- WordPress install: `vendor/bin/wp core install...` (VS Code task available)
- WP-CLI: `vendor/bin/wp [command]`

## Success Criteria

- Pixel-perfect homepage implementation
- Fully responsive design
- WordPress standards compliance
- Easy content management
- Professional agricultural tech appearance

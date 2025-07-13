# Drakkar WordPress Theme

Custom WordPress theme for **Drakkar Agricultura de Precisão** - Brazilian precision agriculture tech company.

## Tech Stack

- WordPress, PHP, WP-CLI, Composer
- HTML5, CSS, Vanilla JavaScript
- Development: Windows 11, PowerShell, VS Code

## Features

- Responsive homepage (see `HOME.png` reference)
- Hero section: "Chegou a nova era da Agricultura de Precisão"
- Navigation: Lavoura Online, Agricultura de Precisão, Histórias de Sucesso, A Drakkar, Newsletter
- Animated stats: 1M+ samples, 1.2K+ clients, 5M+ hectares, 3.7K+ farms, 1.5M+ maps/year
- WhatsApp floating button
- WordPress theme standards with customizer support

## Structure

```
wp-content/themes/drakkar/
├── style.css
├── index.php
├── functions.php
├── header.php
├── footer.php
└── front-page.php
```

## Design

- Colors: Agricultural greens, earth tones, red/orange accents
- Typography: Modern sans-serif with clear hierarchy
- Layout: Mobile-first responsive (CSS Grid/Flexbox)

## Quick Start

```bash
php -S localhost:8000                    # Start server
wp core install [options]                # Install WordPress (requires global WP-CLI)
```

VS Code tasks available for common commands.

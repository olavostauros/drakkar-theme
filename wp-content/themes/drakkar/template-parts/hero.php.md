# Hero Component - Drakkar Theme

## Overview

The Hero component is a streamlined, full-width landing section designed for the Drakkar precision agriculture website. It features a video background, call-to-action button, and an integrated WhatsApp widget with a simplified, performance-optimized structure.

## Files Structure

```
wp-content/themes/drakkar/
├── template-parts/
│   ├── hero.php                 # Main hero component template
│   └── statistics.php           # Statistics component (separate)
├── css/
│   └── hero.css                 # Hero-specific styles
├── js/
│   └── hero.js                  # Hero functionality and animations
└── front-page.php               # Example implementation
```

## Features

### 1. Video Background

- Uses `hero_video.mp4` from `/wp-content/hero/` directory
- Auto-play with muted audio and loop
- Mobile-optimized with playsinline attributes
- No fallback complexity - direct video implementation

### 2. Content Elements

- **Headline**: "Chegou a nova era da Agricultura de Precisão" (hardcoded)
- **Subheadline**: "A tecnologia que coloca o controle da fertilidade do solo na palma da sua mão" (hardcoded)
- **CTA Button**: "Conheça a plataforma" linking to #plataforma (hardcoded)
- **Responsive Typography**: Scales with clamp() and media queries

### 3. WhatsApp Widget

- Fixed position floating button
- Pulse animation to draw attention
- Tooltip with welcome message
- Direct link to WhatsApp with pre-filled message

## Usage

### Basic Implementation

```php
<?php get_template_part('template-parts/hero'); ?>
<?php get_template_part('template-parts/statistics'); ?>
```

**Note**: Statistics have been moved to a separate component (`statistics.php`) for better modularity. This component no longer supports ACF (Advanced Custom Fields) integration. All content is hardcoded for maximum performance and simplicity.

## Customization

### Colors

The hero uses the following color scheme defined in CSS:

```css
/* Primary Colors */
.hero-cta-button {
  background-color: #c53e3e; /* Red CTA button */
}

.hero-cta-button:hover {
  background-color: #b12e2e; /* Darker red on hover */
}

.whatsapp-button {
  background-color: #25d366; /* WhatsApp green */
}

.stat-number {
  color: #c53e3e; /* Red statistics numbers */
}

/* Text Colors */
.hero-content {
  color: #ffffff; /* White text */
}

.stat-label {
  color: #333333; /* Dark gray for statistics - now in statistics.php */
}
```

### Typography

Responsive font sizes are defined for different breakpoints:

```css
/* Desktop */
.hero-headline {
  font-size: 4rem;
}
.hero-subheadline {
  font-size: 1.5rem;
}

/* Tablet */
@media (max-width: 1023px) {
  .hero-headline {
    font-size: 3rem;
  }
  .hero-subheadline {
    font-size: 1.25rem;
  }
}

/* Mobile */
@media (max-width: 767px) {
  .hero-headline {
    font-size: 2.5rem;
  }
  .hero-subheadline {
    font-size: 1.125rem;
  }
}
```

### Content Modification

To customize content, directly edit the `hero.php` file:

```php
<!-- Modify these lines in hero.php -->
<h1 class="hero-headline animate-fadeInUp">Your Custom Headline</h1>
<p class="hero-subheadline animate-fadeInUp delay-500">Your custom subheadline</p>
<a href="#your-target" class="hero-cta-button animate-fadeInUp delay-800">Your CTA Text</a>
```

### Statistics Data

Statistics are now in a separate component. To customize statistics, modify the `statistics.php` file:

```php
<!-- Example modifications in statistics.php -->
<div class="stat-item animate-countUp" data-delay="0">
    <div class="stat-number" data-target="2000000">+2M</div>
    <div class="stat-label">Custom Metric</div>
</div>
```

## Video Requirements

### Optimal Specifications

- **Format**: MP4 (H.264 codec)
- **Resolution**: 1920x1080 (Full HD) minimum
- **Aspect Ratio**: 16:9
- **Duration**: 10-30 seconds (loops automatically)
- **File Size**: Under 10MB for optimal loading
- **Frame Rate**: 30fps

### Compression Settings

- **Bitrate**: 2-5 Mbps
- **Audio**: Remove audio track (not needed for background video)
- **Optimization**: Use web-optimized encoding

## Accessibility Features

### Screen Readers

- Proper heading hierarchy (h1 for main headline)
- Descriptive alt text for images
- ARIA labels for interactive elements

### Keyboard Navigation

- Tab-accessible CTA button
- Focus indicators for interactive elements

### Motion Preferences

- Respects `prefers-reduced-motion` media query
- Disables animations for users who prefer reduced motion

### High Contrast Support

- Enhanced contrast in high contrast mode
- Clear borders and visual separation

## Performance Optimization

### Video Loading

- Uses Intersection Observer for lazy loading
- Preloads only metadata initially
- Handles video load errors gracefully

### Critical CSS

- Essential styles are inlined for above-the-fold content
- Non-critical styles are loaded asynchronously

### Mobile Optimization

- Reduced animation complexity on mobile
- Optimized video loading for mobile connections
- Touch-friendly interactive elements

## Browser Support

### Modern Browsers

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

### Fallbacks

- Static image fallback for video
- CSS Grid with flexbox fallback
- Progressive enhancement approach

## Troubleshooting

### Video Not Playing

1. Check video format and codec compatibility
2. Ensure video file is accessible at the specified URL
3. Check browser autoplay policies
4. Verify video file size and loading time

### Statistics Not Animating

1. Check if Intersection Observer is supported
2. Verify JavaScript is enabled
3. Check for console errors
4. Ensure proper data attributes are set

### Performance Issues

1. Optimize video file size and format
2. Check for CSS and JavaScript conflicts
3. Monitor Core Web Vitals
4. Consider using a CDN for video hosting

## Development Notes

### Dependencies

- No external JavaScript libraries required
- Uses modern web APIs (Intersection Observer, CSS Grid)
- Falls back gracefully for older browsers

### Testing

- Test on various devices and screen sizes
- Verify video playback on different browsers
- Check animations and interactions
- Validate accessibility with screen readers

### Maintenance

- Regularly update video content
- Monitor performance metrics
- Update statistics data as needed
- Test after WordPress and theme updates

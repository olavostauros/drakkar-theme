# Hero Component Prompt - Drakkar Precision Agriculture

## Overview

Create a modern, full-width hero section that serves as the main landing banner for the Drakkar precision agriculture website. The hero should immediately communicate the company's value proposition and encourage user engagement.

## Visual Design Requirements

### Background

- **Video Background**: Use `hero.mp4` as the primary background video
- **Fallback Image**: High-quality image of farmer with tablet in agricultural field (as shown in HOME.png reference)
- **Overlay**: Semi-transparent dark overlay to ensure text readability
- **Aspect Ratio**: Full viewport height (100vh) on desktop, optimized height on mobile

### Layout Structure

```
[Header Navigation - transparent overlay]
[Hero Content - centered vertically and horizontally]
[Statistics Section - positioned at bottom]
```

## Content Elements

### Main Headline

- **Primary Text**: "Chegou a nova era da Agricultura de Precisão"
- **Typography**: Large, bold, white text
- **Font Weight**: 700-900
- **Font Size**:
  - Desktop: 3.5-4rem (56-64px)
  - Tablet: 2.5-3rem (40-48px)
  - Mobile: 2-2.5rem (32-40px)

### Subheadline

- **Text**: "A tecnologia que coloca o controle da fertilidade do solo na palma da sua mão"
- **Typography**: Medium weight, white text with slight transparency (0.9 opacity)
- **Font Size**:
  - Desktop: 1.25-1.5rem (20-24px)
  - Tablet: 1.125rem (18px)
  - Mobile: 1rem (16px)
- **Max Width**: 600px to ensure readability

### Call-to-Action Button

- **Text**: "Conheça a plataforma"
- **Style**: Primary red button (#C53E3E)
- **Design**:
  - Rounded corners (8px border-radius)
  - White text
  - Padding: 16px 32px
  - Font weight: 600
  - Hover effect: Darker red (#B12E2E)
  - Transition: 0.3s ease
- **Size**:
  - Desktop: 18px font size
  - Mobile: 16px font size

## Statistics Section

### Layout

- **Position**: Bottom of hero section
- **Background**: Semi-transparent white overlay (rgba(255,255,255,0.95))
- **Display**: Horizontal row on desktop, responsive grid on mobile

### Metrics Display

Each statistic should include:

1. **+1M** - Amostras coletadas
2. **+1.200** - Clientes ativos
3. **+5M** - Hectares influenciados
4. **+3.700** - Fazendas atendidas
5. **+1,5M** - Mapas gerados/ano

### Statistics Styling

- **Numbers**:
  - Color: Primary red (#C53E3E)
  - Font size: 2.5-3rem (40-48px) desktop, 2rem (32px) mobile
  - Font weight: 700
- **Labels**:
  - Color: Dark gray (#333)
  - Font size: 0.875-1rem (14-16px)
  - Font weight: 500
- **Spacing**: Equal spacing between items, centered alignment

## WhatsApp Widget

### Positioning

- **Location**: Fixed position, bottom-right corner
- **Z-index**: High value (999) to stay above other elements
- **Distance**: 20px from bottom and right edges

### Design

- **Message**: "Seja bem-vindo a Drakkar! Como podemos ajudá-lo?"
- **Style**: WhatsApp green (#25D366)
- **Icon**: WhatsApp logo
- **Animation**: Subtle pulse or bounce effect on page load

## Technical Implementation

### Responsive Breakpoints

- **Mobile**: 320px - 767px
- **Tablet**: 768px - 1023px
- **Desktop**: 1024px+

### Performance Considerations

- **Video Optimization**:
  - Compressed MP4 format
  - Autoplay without audio
  - Loop continuously
  - Preload metadata
- **Image Fallback**: WebP format with JPEG fallback
- **Loading**: Critical CSS inline, progressive enhancement

### Accessibility Requirements

- **Alt Text**: Descriptive alt text for background image
- **Keyboard Navigation**: Tab-accessible CTA button
- **Screen Readers**: Proper heading hierarchy (h1 for main headline)
- **Contrast**: Ensure 4.5:1 contrast ratio for text

## Animation & Interactions

### On Page Load

- **Text**: Fade in from bottom with 0.5s delay
- **Button**: Fade in with 0.8s delay
- **Statistics**: Count-up animation from 0 to target numbers

### Hover Effects

- **CTA Button**: Color transition and slight scale (1.05x)
- **Statistics**: Subtle highlight effect on hover

## WordPress Integration

### Custom Fields

- Hero video file upload
- Fallback image upload
- Headline text (editable)
- Subheadline text (editable)
- CTA button text and link
- Statistics data (numbers and labels)

### Template Structure

```php
// Hero section template part
get_template_part('template-parts/hero-zero');
```

## Browser Support

- Modern browsers (Chrome 60+, Firefox 55+, Safari 12+, Edge 79+)
- Graceful degradation for older browsers
- Video fallback to static image on unsupported devices

## SEO Considerations

- **H1 Tag**: Main headline should be wrapped in h1
- **Meta Description**: Reflect hero content
- **Schema Markup**: Organization and WebSite structured data
- **Image Optimization**: Compressed and properly sized media files

# Hero Agriculture Component Prompt

Create a responsive hero section for Drakkar precision agriculture website.

## Content & Layout

```
[Red Badge: "Agricultura de Precisão"]

Há 19 anos transformamos
solo em estratégia

A Agricultura de Precisão da Drakkar é prática, técnica e feita sob medida.
Desde 2006, ajudamos produtores a usarem melhor seus recursos,
com foco em resultados reais e solo equilibrado

[CTA Button: "Quer produtividade de verdade? A gente te mostra o caminho"]
```

## Design Specifications

### Background & Layout

- Background: `hero-agriculture.png` with dark overlay (40% opacity)
- Content: Right-aligned, responsive (50% desktop, 70% tablet, full mobile)

### Colors & Typography

- Primary Red: #C53E3E (badge, accent, CTA)
- Text: White (#FFFFFF), Light Gray (#F5F5F5)
- Badge: Red background, white text, rounded
- Headline: Bold white, "solo em estratégia" in red
- CTA: Red button with white text

## Technical Implementation

### HTML Structure

```html
<section class="hero-agriculture">
  <div class="hero-background"></div>
  <div class="hero-content">
    <span class="hero-badge">Agricultura de Precisão</span>
    <h1 class="hero-title">
      Há 19 anos transformamos<br />
      <span class="text-accent">solo em estratégia</span>
    </h1>
    <p class="hero-description">...</p>
    <a href="#" class="hero-cta"
      >Quer produtividade de verdade?<br />A gente te mostra o caminho</a
    >
  </div>
</section>
```

### Key Requirements

- Accessibility: Alt text, proper headings, color contrast
- Performance: Optimized images, lazy loading, responsive srcset
- Brand: #C53E3E red, agricultural imagery, results-focused messaging

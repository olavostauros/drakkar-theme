# Hero Big Data Dashboard Component Prompt

## Component Overview

Create a modern, responsive web component that displays big data analytics in a hero section format, specifically designed for agricultural/soil analysis data visualization.

## Design Requirements

### Layout Structure

- **Hero Section**: Full-width container with prominent data visualization
- **Header Area**: Title "Big Data Drakkar" with subtitle "Análise por Ciclo"
- **Metadata Section**: Display key metrics (Location: "Camada", Depth: "00-10 cm", Sample Count: "Nº de amostras")
- **Chart Area**: Interactive bar chart as the main visual element
- **Responsive Design**: Mobile-first approach with breakpoints for tablet and desktop

### Visual Elements

#### Color Scheme

- **Primary Color**: Teal/Turquoise (#2DD4BF or similar)
- **Background**: Clean white/light gray
- **Text**: Dark gray (#374151) for readability
- **Accent**: Light gray for grid lines and secondary elements

#### Typography

- **Main Title**: Large, bold sans-serif font (32-48px)
- **Subtitle**: Medium weight, secondary color (18-24px)
- **Data Labels**: Clean, readable font (14-16px)
- **Numbers**: Monospace or sans-serif for data consistency

#### Chart Specifications

- **Type**: Vertical bar chart
- **Bars**: Rounded corners, teal color (#2DD4BF)
- **Grid**: Horizontal grid lines, light gray
- **Spacing**: Adequate padding between bars
- **Animation**: Smooth entry animations for bars

### Data Structure

```json
{
  "title": "Big Data Drakkar",
  "subtitle": "Análise por Ciclo",
  "metadata": {
    "location": "Camada",
    "depth": "00-10 cm",
    "samples": "418.326,00"
  },
  "chartData": [
    { "label": "Fósforo", "value": 35, "unit": "" },
    { "label": "Potássio", "value": 15, "unit": "" },
    { "label": "Saturação de Bases", "value": 4, "unit": "" }
  ]
}
```

### Interactive Features

- **Hover Effects**: Bars should highlight on hover with slight color change
- **Tooltips**: Display exact values when hovering over bars
- **Responsive Behavior**: Chart adapts to different screen sizes
- **Loading States**: Smooth loading animation for data

### Technical Requirements

#### HTML Structure

- Semantic HTML5 elements
- Accessible markup with proper ARIA labels
- Clean, maintainable structure

#### CSS Features

- CSS Grid or Flexbox for layout
- CSS Custom Properties for theming
- Responsive units (rem, em, %)
- Smooth transitions and animations
- Mobile-first media queries

#### JavaScript Functionality

- Data-driven chart rendering
- Event handlers for interactions
- Responsive chart resizing
- Smooth animations using CSS transitions or libraries

### Accessibility

- **Screen Readers**: Proper ARIA labels and descriptions
- **Keyboard Navigation**: Tab-accessible interactive elements
- **Color Contrast**: WCAG AA compliant contrast ratios
- **Alternative Text**: Descriptive text for chart data

### Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Progressive enhancement for older browsers
- Graceful degradation for JavaScript-disabled environments

### Performance Considerations

- Lightweight implementation
- Efficient rendering
- Optimized animations
- Lazy loading if part of larger dashboard

## Implementation Notes

- Use modern CSS features (Grid, Flexbox, Custom Properties)
- Consider using Chart.js, D3.js, or similar library for advanced chart features
- Implement as a reusable component (Web Component, React, Vue, etc.)
- Include proper error handling for data loading
- Add loading states and empty data states

## Example Usage

The component should be easily integrable into WordPress themes, static sites, or modern web applications with minimal configuration and maximum flexibility for different data sets.

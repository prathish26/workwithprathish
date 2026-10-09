# ASSET MANIFEST & REPLACEMENT MEDIA AUDIT

This manifest documents all visual and interactive assets used across the Nikola Radeski portfolio reconstruction, ensuring 100% legal compliance and pixel-accurate geometry preservation.

---

## 1. Proprietary Source Asset Replacement Log

In strict adherence to the project owner's legal and asset guidelines, proprietary personal photographs, portfolio artwork, and logos have been replaced with identically sized local replacement assets to preserve exact geometry, aspect ratios, responsive scaling, and animation timelines.

| Asset Identifier | Reference Source Asset | Reference Dimensions | Replacement Asset Path | Geometry & Purpose |
| :--- | :--- | :--- | :--- | :--- |
| **Hero Portrait** | `/wp-content/uploads/2025/06/IMG_9058-1200x1600.webp` | `1200 x 1600` (3:4 ratio) | `assets/images/hero-portrait.svg` | Stylized editorial silhouette portrait with watermark and status badge. Preserves exact card pin dimensions. |
| **Hero Reel Poster** | `/wp-content/uploads/2025/09/NikPromo2-v1.mp4` Poster | `1200 x 1600` (3:4 ratio) | `assets/images/hero-reel-poster.svg` | Dark motion design showreel poster with play icon, revealing on 180° Y-flip. |
| **Work Sample 1** | `/wp-content/uploads/2025/09/AOJ-Web1-min.png` | `1282 x 962` (~4:3 ratio) | `assets/images/work-1.svg` | Architecture platform browser UI mockup preserving exact container padding. |
| **Work Sample 2** | `/wp-content/uploads/2025/09/Screenshot_77.png` | `1148 x 904` (~4:3 ratio) | `assets/images/work-2.svg` | Dark interface system card with product flows. |
| **Work Sample 3** | `/wp-content/uploads/2025/09/Screenshot_26.png` | `1909 x 1079` (16:9 ratio) | `assets/images/work-3.svg` | Interactive cybersecurity brand campaign showcase. |
| **Work Sample 4** | `/wp-content/uploads/2025/09/Frame-198407883722-min-1.png`| `1568 x 914` (~16:9 ratio)| `assets/images/work-4.svg` | Product design systems & prototype window. |
| **Portfolio Banner**| `/wp-content/uploads/2025/09/pngwing.com-82-1-1-1.png` | `1200 x 400` | `assets/images/portfolio-banner-bg.svg` | Subtle dot/grid background for the fullwidth dashed link card. |

---

## 2. Iconography & Vector Assets

* **Navigation Icons:**
  * Home Glyph: Feather/SVG home vector (`24x24`)
  * Arrow Glyph: Angle right vector (`24x24`)
  * Menu Burger: SVG 3-line grip glyph (`18x14`)
* **Rating Icons:**
  * 5 Stars: Unicode `&#9733;` rendered in `#ef8700` (`awb-stars-rating`)
* **Action Arrows:**
  * Submit arrow: SVG / Unicode `&rarr;` sliding on hover.

---

## 3. Motion & Animation Timing Manifest

* **Preloader Greeting Timing:**
  * Initial Letter Delay: `0.1s` staggered
  * Multilingual Switch Interval: `140ms`
  * Exit Fade Duration: `500ms`
* **Card Pin Flip Timeline:**
  * Total Scrub Distance: `+=5750px`
  * Scrub Smoothing: `1.2s`
  * Flip Duration: `0.45` relative timeline units
  * Peak Scale: `1.18`
* **Skills Sticky Deck:**
  * Offsets: `80px` to `170px` in `+10px` increments
  * Resting Tilts: `-1deg`, `+1deg` alternating
  * Hover Transition: `0.35s cubic-bezier(0.2, 0.8, 0.2, 1)`
* **Work Experience Blur:**
  * Trigger: `top 85%` to `bottom 70%`
  * Filter: `blur(8px) -> blur(0px)`
  * Opacity: `0 -> 1`


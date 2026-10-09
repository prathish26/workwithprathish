# DEPENDENCY AUDIT & FRONTEND REVERSE-ENGINEERING REPORT

This report details every frontend dependency, library, script, stylesheet, and font detected on the reference website [https://nikolaradeski.com/](https://nikolaradeski.com/).

---

## 1. Verified Frontend Libraries Audit

| Library Name | Version Detected | Source URL / Enqueue Handle | Where Used on Reference Site | Necessary for Reconstruction | Detection Status |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Lenis Smooth Scroll** | `1.3.26` | `/wp-content/plugins/smooth-scrolling-with-lenis/js/vendor/lenis.min.js?ver=1.3.26` | Global page inertial smooth scrolling, scroll anchor navigation, ticker sync | **YES** (Crucial for scroll rhythm and inertia) | **CONFIRMED** |
| **GSAP (GreenSock)** | `3.x` (Avada bundled) | `/wp-content/uploads/fusion-scripts/634f1cac11f1329fe0119f0bad3d5571.min.js?ver=3.16.1` | Hero 3D Card Pin rotation (0° → 180° → 360°), scale up (1.18), scrub pin (+=5750) | **YES** (Core motion engine) | **CONFIRMED** |
| **GSAP ScrollTrigger** | `3.x` (Avada bundled) | `/wp-content/uploads/fusion-scripts/634f1cac11f1329fe0119f0bad3d5571.min.js?ver=3.16.1` | Pinned timeline scrubbing, `.cardFadeController`, work experience blur scrubbing | **YES** (Exact trigger points & pinning) | **CONFIRMED** |
| **jQuery** | `3.7.1` | `/wp-includes/js/jquery/jquery.min.js?ver=3.7.1` | WordPress core, Avada theme elements, DOM utilities | **YES** (WP ecosystem) | **CONFIRMED** |
| **Swiper** | Bundled in Fusion Scripts | `/wp-content/uploads/fusion-scripts/634f1cac11f1329fe0119f0bad3d5571.min.js?ver=3.16.1` | Testimonials / Reviews carousel on tablet & mobile | **YES** (Avada Testimonials) | **CONFIRMED** |
| **Isotope / Packery** | Bundled in Fusion Scripts | `/wp-content/uploads/fusion-scripts/634f1cac11f1329fe0119f0bad3d5571.min.js?ver=3.16.1` | Portfolio post cards filtering by category (`#pc=video-motion`, `#pc=web-ui-ux`, etc.) | **YES** (Portfolio filtering) | **CONFIRMED** |
| **Google Tag Manager** | GTM `GT-PHRCM75D` | `https://www.googletagmanager.com/gtag/js?id=GT-PHRCM75D` | Analytics & tracking | **NO** (Telemetry only) | **CONFIRMED** |
| **Google Site Kit** | Plugin Dist | `/wp-content/plugins/google-site-kit/...` | Admin analytics | **NO** (Telemetry only) | **CONFIRMED** |

### Libraries NOT Detected on Reference
- **Three.js / WebGL**: NOT detected (0 matches across all assets). All 3D card flips utilize CSS 3D transforms (`transform-style: preserve-3d; perspective: 1400px; transform: rotateY(180deg)`).
- **Locomotive Scroll**: NOT detected. Smooth scrolling is powered by **Lenis v1.3.26**.
- **Lottie / Bodymovin**: NOT detected. Icons and badges are SVG/FontAwesome/Icomoon.

---

## 2. Typography & Fonts Audit

| Font Family | Weights / Formats | Origin | Where Used | Reconstruction Strategy |
| :--- | :--- | :--- | :--- | :--- |
| **Clash Display** | Semibold (600), Medium (500), Bold (700) - TTF | Custom Upload `/wp-content/uploads/2025/06/` | Giant hero names (`NIKOLA`, `RADESKI`), major editorial headings | Metrics-identical @font-face definition |
| **General Sans** | Regular (400), Medium (500), Semibold (600), Italic - TTF | Custom Upload `/wp-content/uploads/2025/06/` | Main navigation pills, body text, subheadings, buttons, FAQ questions | Metrics-identical @font-face definition |
| **Gloria Hallelujah** | Regular (400) - WOFF2 | Google Fonts (`fonts.gstatic.com`) | Handwritten section label annotations (`/ Services, Skills, Abilities`, `Top performing`, `MVP Go-to-market`) | Google Fonts CDN direct embed |
| **FontAwesome 5/6** | Solid (900) - WOFF2 | Avada bundled assets | Home icon, angles, stars, navigation chevrons | Embedded SVG / FA icon set |
| **AWB Icons / Icomoon** | Vector font - WOFF | Avada theme library | Header menu icons | Embedded SVG / CSS vectors |

---

## 3. WordPress Theme & Plugin Stack Audit

| Component | Detected Item | Version | Customization Scope |
| :--- | :--- | :--- | :--- |
| **CMS Platform** | WordPress | Latest Stable | Core host |
| **Active Theme** | Avada | 7.11+ / Fusion Builder 3.16.1 | Base framework, reconstructed with 80-90% custom code |
| **Smooth Scroll Plugin** | Smooth Scrolling with Lenis | 1.3.26 | Enqueued in footer, bridge with GSAP ticker |
| **Form Builder** | Avada Fusion Form (Form ID 895) | 3.16.1 | Interactive AJAX form with custom `.nik-radio-scope` styling |
| **Child Theme** | `portfolio-child` | 1.0.0 | Hosts all custom CSS, JS, templates, and shortcodes |


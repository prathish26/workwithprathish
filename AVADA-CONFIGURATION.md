# AVADA THEME CONFIGURATION GUIDE

This document explains how the Avada WordPress Theme, Avada Core, and Avada Builder are configured to host the reconstructed portfolio with 100% visual and structural fidelity.

---

## 1. Required Plugins & Dependencies

1. **Avada Theme** (v7.11+ stable)
2. **Avada Core** (v5.11+)
3. **Avada Builder** (v3.16+)
4. **Smooth Scrolling with Lenis** (v1.3.26) - or active child theme script
5. **Contact Form 7** (Optional, if substituting Avada Form 895)

---

## 2. Avada Global Options Configuration

### Color Palette Mapping (`Avada > Options > Colors`)
* `--awb-color1`: `#eaeaea` (Page Background & Base Card Shadow)
* `--awb-color2`: `#333333` (Secondary Dark Typography & Subheadings)
* `--awb-color3`: `#dbdbdb` (Subtle Dividers, Borders, Neutral Pills)
* `--awb-color4`: `#00512f` (Deep Forest Green Accent)
* `--awb-color5`: `#2d60ce` (Royal Blue Accent)
* `--awb-color6`: `#434549` (Mid Grey Paragraphs)
* `--awb-color7`: `#6d6d6d` (Muted Timestamps & Descriptors)
* `--awb-color8`: `#141617` (Deep Editorial Black Typography)
* `--awb-custom_color_1`: `#8e8e8e` (Silver / Secondary Text)
* `--awb-custom_color_2`: `#e27500` (Signature Amber/Orange Accent)

### Typography Configuration (`Avada > Options > Typography`)
1. **Custom Font Uploads:**
   * `Clash Display`: Upload Semibold, Medium, and Bold TTF formats.
   * `General Sans`: Upload Regular, Medium, Semibold, and Italic TTF formats.
   * `Gloria Hallelujah`: Enqueue from Google Fonts.
2. **Typography Assignments:**
   * **H1 / Hero Display:** `Clash Display - Semibold`, `120px - 180px` (fluid), line-height `0.88`, letter-spacing `-2px`.
   * **H2 / Section Titles:** `General Sans - Medium`, `44px - 58px`, letter-spacing `-1px`.
   * **H3 / Card Titles:** `General Sans - Medium`, `26px - 32px`.
   * **Body Typography:** `General Sans - Regular`, `16px - 18px`, line-height `1.65`.
   * **Section Labels & Descriptors:** `Gloria Hallelujah`, `14px - 18px`.

---

## 3. Page Layout & Template Settings

* **Page Template:** `100% Width` (`100-width.php`)
* **Avada Page Options for Home Page:**
  * Header: Custom Layout Section (`fusion-tb-header`)
  * Page Title Bar: `Hide`
  * Content Padding: `0px` top, `0px` bottom
  * Sticky Header: Handled by `.bottom-fixed-nav` & `.mobile-sticky-header`
  * Sliders: `Disabled`

---

## 4. Section by Section Avada Builder Structure

1. **Hero Container (`fusion-builder-row-3`):**
   * Fullwidth Container: 100% width, non-hundred-percent-height-scrolling
   * Custom CSS Class: `intro-section firstherosection`
   * Background: Video loop background + linear-gradient overlay
   * Elements: Nested columns with `hero-left`, `hero-right`, and `.card-pin` 3D card.
2. **Skills Container (`fusion-builder-row-3` / `#skills`):**
   * Fullwidth Container with menu anchor `skills`
   * Column Elements: 9 Sticky Columns with custom sticky offsets:
     `--awb-sticky-offset: 80px, 90px, 100px, 110px, 120px, 130px, 140px, 150px, 170px`
   * Transforms: Alternating `scale(1) rotate(-1deg)` and `rotate(1deg)`.
3. **About Container (`#about`):**
   * Custom Class: `creative-core`
   * Elements: Text block + Title Marquee (`awb-marquee`) with infinite scroll.
4. **Awards Container (`#awards`):**
   * Class: `about-column`
   * Elements: 9 inner rows with 4 columns each (Index, Title, Organization, Date).
5. **Portfolio Container (`#portfolio`):**
   * 2x2 Post Cards Grid + 1 Fullwidth Dashed Banner Card.
6. **Career Container (`.workexperience`):**
   * Rows with role, years, company, separated by `fusion-separator`.
7. **Testimonials Container (`#testimonials`):**
   * Avada Testimonials Grid / Swiper Carousel with gold star ratings.
8. **FAQ Container (`#faq`):**
   * Dual-column `fusion-accordian` with class `faq-style` (20px border-radius).
9. **Contact Container (`#contact`):**
   * Avada Form 895 with custom `.nik-radio-scope` radio styling.
10. **Footer Layout (`fusion-tb-footer`):**
    * Fullwidth Marquee + 4-column widget area + bottom copyright bar.


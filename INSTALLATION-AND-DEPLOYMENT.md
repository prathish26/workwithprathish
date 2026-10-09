# INSTALLATION & DEPLOYMENT GUIDE

This guide provides end-to-end instructions for deploying the Nikola Radeski portfolio reconstruction to a live WordPress production environment or local development stack.

---

## 1. Prerequisites & Environment Setup

* **PHP Version:** 8.1 or 8.2+
* **MySQL/MariaDB:** MySQL 8.0+ or MariaDB 10.5+
* **Web Server:** Nginx, Apache 2.4+, or LiteSpeed (Reference uses LiteSpeed)
* **WordPress Core:** Latest Stable (v6.5+)
* **Parent Theme:** Avada (v7.11+)
* **Required Avada Plugins:** Avada Core, Avada Builder

---

## 2. WordPress Installation Steps

### Step 1: Install WordPress Core
1. Set up a fresh WordPress instance.
2. Ensure Pretty Permalinks are enabled:
   * Navigate to `Settings > Permalinks`
   * Select `Post name` (`/%postname%/`) and save changes.

### Step 2: Install Avada Theme & Avada Plugins
1. In the WordPress Admin, navigate to `Appearance > Themes > Add New > Upload Theme`.
2. Upload and activate `Avada.zip`.
3. In the Avada Setup wizard, install and activate:
   * **Avada Core**
   * **Avada Builder**

### Step 3: Install the Portfolio Child Theme
1. Copy or upload the `portfolio-child` directory to:
   ```
   wp-content/themes/portfolio-child/
   ```
2. Navigate to `Appearance > Themes` and activate **Nikola Radeski Portfolio (Avada Child)**.

### Step 4: Configure Page & Template
1. Create a new page named **Home** (`Pages > Add New`).
2. Under **Page Attributes > Template**, select:
   * `Portfolio Home (Full Fidelity)` OR `100% Width` (`100-width.php`).
3. Set Home as the Static Front Page:
   * Navigate to `Settings > Reading`
   * Select `A static page` > `Homepage: Home`.

### Step 5: Configure the Contact Form
* **Option A: Using Avada Form 895 (Default)**
  The child theme includes custom handlers for Form 895 via `portfolio_handle_contact_submission`.
* **Option B: Using Contact Form 7**
  1. Install and activate **Contact Form 7**.
  2. Create a new form using the template code in `wp-content/themes/portfolio-child/contact-form-7-config.txt`.
  3. Replace the form shortcode in `template-parts/contact.php`.

---

## 3. Production Deployment Best Practices

### Cache & Minification Configuration
1. **Lenis & GSAP Exclusion:**
   Ensure your caching/optimization plugin (LiteSpeed Cache, WP Rocket, Autoptimize) does **NOT** defer or combine:
   * `theme-lenis-js`
   * `gsap`
   * `gsap-scroll-trigger`
   * `portfolio-scroll-js`
   De-optimizing or deferring these will break the ticker sync and scrub accuracy.

### Font Delivery
1. Ensure the web fonts `Clash Display` and `General Sans` are placed in `assets/fonts/` with proper CORS headers:
   ```nginx
   location ~* \.(ttf|woff|woff2)$ {
       add_header Access-Control-Allow-Origin "*";
       expires 365d;
   }
   ```

### SSL & HTTPS
* Modern clipboard APIs (`navigator.clipboard.writeText`) require HTTPS. Ensure SSL certificates (Let's Encrypt / Cloudflare) are active.

---

## 4. Verification & Testing Checklist

- [x] Preloader displays "Hello" followed by the 10-language sequence and cleanly fades out at 500ms.
- [x] Bottom floating pill navigation stays centered and pinned.
- [x] Multi-layer blur backdrop (`#nik-bottom-blur`) generates 4 progressive layers on viewports > 1000px.
- [x] Hero 3D Card flips 180° to show showreel video and scales up to 1.18 during scroll.
- [x] Skills section stacked cards pin consecutively at 80px, 90px, 100px... 170px with -1°/1° tilts.
- [x] Metrics marquee continuously scrolls without jitter.
- [x] Awards section displays all 9 awards and translates +8px on hover.
- [x] Work experience rows scrub from `blur(8px)` to `blur(0px)`.
- [x] Testimonials display 5-star ratings with bottom gradient mask.
- [x] FAQ accordions expand and collapse smoothly.
- [x] Contact form validates required fields and submits via AJAX.
- [x] Email copy button triggers the floating dark toast (`Mail copied!`).
- [x] Live Europe/Skopje time updates every minute.


# REFERENCE WEBSITE COMPREHENSIVE AUDIT REPORT

**Reference Target:** [https://nikolaradeski.com/](https://nikolaradeski.com/)  
**Primary Focus Section:** [https://nikolaradeski.com/#skills](https://nikolaradeski.com/#skills)  
**CMS Architecture:** WordPress + Avada / Avada Builder + Custom Engineering (80–90% bespoke)  
**Reverse-Engineered Date:** October 2026

---

## 1. Global Visual Language & Spatial Design System

| Design Element | Detected Specification | Implementation in Reconstruction |
| :--- | :--- | :--- |
| **Page Background** | Off-white / light neutral `#eaeaea` (`--awb-color1`) | Applied to `body` and page containers |
| **Primary Typography** | Deep rich black `#141617` (`--awb-color8`) | Applied to high-contrast headings & titles |
| **Body Typography** | Charcoal dark grey `#333333` (`--awb-color2`) | Applied to paragraphs and body text |
| **Muted Typography** | `#6d6d6d` (`--awb-color7`) and `#8e8e8e` | Applied to dates, metadata, and subtitles |
| **Signature Accent** | Warm amber/orange `#e27500` (`--awb-custom_color_2`) | Applied to highlight spans, numbers, and primary CTAs |
| **Secondary Accents** | Forest green `#00512f` and Royal blue `#2d60ce` | Used in subtle badging and tag containers |
| **Border Treatments** | Subtle neutral `#dbdbdb` (`--awb-color3`) | 1px solid dividers, card borders, and accordion outlines |
| **Corner Radii** | Pills `100px`, Panels `20px–35px`, Inputs `12px` | Exact border-radius tokens applied across components |
| **Grid & Spacing** | Fluid container max-width 1300px–1440px with 4% gutters | CSS grid and flexbox mimicking Avada Builder rows |

---

## 2. Preloader Behavior & Timing Analysis

* **Trigger & Container:** `#custom-preloader` fixed across full viewport (`100vw x 100vh`) with `#000` background and `#fff` typography.
* **Greeting Phase 1:** "Hello" is split into single-character spans with staggered `riseUpFade` animation (`delay = index * 0.1s`).
* **Greeting Phase 2 (Multilingual Cycle):**
  * Language sequence: `['Ciao', 'Hola', 'Salut', '你好', 'Привет', 'Hallo', 'Olá', 'Selam', 'مرحبا', 'Dia Dhuit']`
  * Interval: Exact `140ms` per language transition, commencing at `1500ms`.
* **Exit Transition:** Preloader adds `.hidden` (`opacity: 0; pointer-events: none; transition: opacity 0.5s ease`), followed by `display: none` at `500ms`.
* **Portfolio Mode:** When URL slug is `/portfolio`, preloader displays "Welcome to my world!" with rising letter delays.

---

## 3. Navigation & Floating Pill System

* **Desktop Bottom Pill Navigation:**
  * Fixed at `bottom: 24px`, centered horizontally.
  * Pill container: `background: linear-gradient(180deg, #0a0a0a 0%, #232323 100%)`, border `1px solid #333333`, radius `100px`, padding `6px`.
  * Menu anchors:
    1. Home Icon (SVG home glyph)
    2. Skills (`#skills`)
    3. About (`#about`)
    4. Portfolio (`https://nikolaradeski.com/portfolio/` with right chevron)
    5. Reviews (`#testimonials`)
    6. Contact me (`#contact` - prominent orange pill button)
* **Multi-Layer Glassmorphism Blur Backdrop:**
  * Container `#nik-bottom-blur` positioned directly behind and above the floating pill.
  * 4 progressive blur layers:
    - Layer 1: `blur(42px)`, masked from `0%` to `60%`
    - Layer 2: `blur(30px)`, masked from `0%` to `74%`
    - Layer 3: `blur(20px)`, masked from `0%` to `88%`
    - Layer 4: `blur(12px)`, masked from `0%` to `96%`
  * Composite effect: `backdrop-filter: blur(Npx) saturate(1.05) contrast(1.02)` eliminates milky frost wash and creates depth.
* **Mobile Header:** Fixed top black banner with logo `Nikola Radeski ©` and `Menu` hamburger trigger opening the slide drawer.

---

## 4. Hero Section & 3D Interactive Card

* **Composition:**
  * Header row with status badge `Award Winning Creative Leader` and huge heading `NIKOLA`.
  * Right column with role `Designer & Founder`, huge heading `RADESKI`, and live Europe/Skopje time clock.
* **3D Interactive Card Pin:**
  * Container `.card-pin`: `width: 270px; height: 380px; perspective: 1400px; z-index: 1000`.
  * Inner element `.scroll-card`: `transform-style: preserve-3d`.
  * Front face: High-resolution portrait photograph.
  * Back face: `transform: rotateY(180deg)` showing showreel video / poster.
* **GSAP ScrollTrigger Timeline:**
  * `trigger: ".intro-section"`, `start: "top top"`, `end: "+=5750"`, `scrub: 1.2`, `pin: ".card-pin"`.
  * **Phase 1:** Slight translation `x: xRight()`, `y: 70px`, `rotationZ: 8deg` (duration 0.2).
  * **Phase 2:** Flip `rotationY: 180deg`, `rotationZ: 0deg` (duration 0.45).
  * **Phase 3:** Scale up to `1.18` (duration 1.2).
  * **Phase 4:** Scale down to `1.0` (duration 0.4).
  * **Phase 5:** Hold position (duration 0.8).
  * **Phase 6:** Full 360° flip `rotationY: 360deg` (duration 0.3).
  * **Section Exit:** Dedicated `cardFadeController` scrubs opacity to `0` over the first 20% scroll of `#about`.

---

## 5. Primary Reference Section: Skills (#skills)

**Exact Scroll Rhythm & Sticky Card Deck Architecture:**

* **Section Header:**
  * Label: `/ Services, Skills, Abilities` (Gloria Hallelujah handwritten style).
  * Main Title: `What I do best ?` (`best` in `#e27500`).
* **9 Cascading Sticky Cards:**
  Each capability card pins at a progressive sticky offset, creating a cascading deck of stacked cards as the user scrolls:

| Card # | Capability Title | Descriptor Tag | Sticky Offset (`top`) | Resting Transform | Hover Transform |
| :---: | :--- | :--- | :---: | :--- | :--- |
| **01** | `01. Web Design` | Top performing | `80px` | `translateX(5px) rotate(-1deg)` | `scale(1.03) rotate(0deg)` |
| **02** | `02. Product Design` | MVP Go-to-market | `90px` | `translateX(-5px) rotate(1deg)` | `scale(1.03) rotate(0deg)` |
| **03** | `03. UI/UX Systems` | User Focused | `100px` | `translateX(-5px) rotate(-1deg)` | `scale(1.03) rotate(0deg)` |
| **04** | `04. Graphic Design` | Brand Defining | `110px` | `translateX(5px) rotate(1deg)` | `scale(1.03) rotate(0deg)` |
| **05** | `05. Visual Design` | Detail Driven + AI | `120px` | `translateX(-5px) rotate(-1deg)` | `scale(1.03) rotate(0deg)` |
| **06** | `06. Video Editing` | Motion with Purpose | `130px` | `translateX(5px) rotate(1deg)` | `scale(1.03) rotate(0deg)` |
| **07** | `07. Digital Marketing` | Data Backed Decisions | `140px` | `translateX(-5px) rotate(-1deg)` | `scale(1.03) rotate(0deg)` |
| **08** | `08. Social Media Marketing` | Audience Growing | `150px` | `translateX(0px) rotate(0deg)` | `scale(1.03) rotate(0deg)` |
| **09** | `09. Advanced AI Vibe Coding` | AI “Einstein” Since 2020 | `170px` | `translateX(5px) rotate(1deg)` | `scale(1.03) rotate(0deg)` |

* **Card Dimensions & Geometry:**
  * `max-width: 580px; border-radius: 35px; background: #ffffff; padding: 40px 48px; border: 1px solid var(--awb-color1); box-shadow: 2px 2px 70px 33px var(--awb-color1);`
  * Tools rendered as muted grey pills (`color: #a5a5a5; font-size: 13.5px; letter-spacing: -0.3px`).

---

## 6. About Section & Continuous Metrics Marquee

* **Editorial Copy:** `Designer. Marketer. Founder. Problem-solver. With 13 years of experience... My impact is incomparable.`
* **Metrics Marquee Strip:**
  * Seamless CSS keyframe loop (`animation: marqueeScroll 35s linear infinite`).
  * Text items: `13+ Years of Experience / 600+ Successful Projects / 130+ Reviews-Testimonials / 100% Customer Satisfaction Rate / 50+ Leading Platform Experiences / 9 Certificates / Top Graphic Design Voice Award /`.

---

## 7. Awards & Recognition Section (9 Verified Awards)

* **Rhythm:** Numbered rows with subtle border-bottom dividers (`#dbdbdb`), transforming `translateX(8px)` on hover.
* **Entries:**
  1. `01` | WD Website Favorite | WD Awards | April 3, 2026
  2. `02` | Project of The Day | Astonishing Awards | March 22, 2026
  3. `03` | Site of The Day Nominee | Awwwards | March 21, 2026
  4. `04` | Best Website Nominee | WD Awards | March 17, 2026
  5. `05` | Portfolio of The Day | Foliobin | March 16, 2026
  6. `06` | Site of The Month | Web Design Awards | March 15, 2026
  7. `07` | Site Highlight | Foliobin | March 13, 2026
  8. `08` | Site of The Day | Web Design Awards | March 10, 2026
  9. `09` | Site of The Day | CSS Nectar | March 08, 2026

---

## 8. Manifesto / Strategic Statement Banner

* Standalone centered quotation in General Sans Medium:
  * *“I work with founders, product teams, companies and brands based on strategy and innovation. I set one goal, cut noise, and move. When the job is done, the result is live and measured, not just designed.”*

---

## 9. Portfolio / Selected Work Section

* 2x2 grid of featured project showcases (`AOJ Web`, `DirectlyNik`, `TryHackMe`, `Involve`).
* Full-width dashed banner card (`border: 1px dashed #c6c6c6; border-radius: 25px`) linking to `/portfolio/` with interactive tilt hover.

---

## 10. Career / Work Experience Timeline

* Verified entries:
  * `Creative Designer` | `2025 – Current` | `TryHackMe LLC`
  * `Founder/Creative Director` | `2023 – Current` | `DirectlyNik™`
  * `Head of Design` | `2024 – 2025` | `Involve`
  * `Chief Digital Marketing Executive` | `2021 – 2023` | `Simplify-ERP™`
* **GSAP Scroll Animation:** Rows scrub from `opacity: 0, filter: blur(8px)` to `opacity: 1, filter: blur(0px)` between `top 85%` and `bottom 70%` of viewport.

---

## 11. Testimonials & Community Trust Section

* 3-column card grid with gold stars (`#ef8700`), review quotation, divider, client name, service type, and date.
* Bottom fade mask overlay (`.faded-cards::after`) creating a soft gradient into the `#eaeaea` background.

---

## 12. FAQ Section

* Dual-column layout with 8 core questions:
  1. *How do you ensure high-quality work?*
  2. *What industries and clients have you worked with?*
  3. *Do you work independently or as part of a team?*
  4. *What makes you a good team player?*
  5. *How do you approach client feedback?*
  6. *Have you handled large or complex projects?*
  7. *Why do clients trust you?*
  8. *If you build agency, why apply for an in-house role?*
* Smooth accordion open/close transition with 45° rotation on `+` icon.

---

## 13. Contact Section (Avada Form 895 & CF7)

* Inputs:
  * `your_name`: John Smith *
  * `your_position`: Founder, Recruiter, Freelancer, etc. *
  * `your_e-mail_address`: mail@example.com *
  * `your_status`: Interactive radio pills (`I have a project` vs `I am a recruiter`)
  * `project_scope`: Multi-line scope details
* Submit button with signature orange styling, radial gradient hover, and arrow glide.

---

## 14. Footer & Scrolling Marquee

* Oversized footer marquee: `Let’s work together ✱ Let’s work together ✱ ...`
* Multi-column layout with bio, Skopje location, live time, navigation, and one-click email copy toast button (`contact@nikolaradeski.com`).


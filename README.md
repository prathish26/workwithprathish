# Prathish Raj | Digital Architect & Portfolio

Official digital portfolio and interactive experience for **Prathish Raj**, Digital Architect operating at the intersection of AI Automation, Cloud-Native Systems, Cybersecurity, and User Experience Design.

Hosted at: **[workwithprathish.in](https://workwithprathish.in)**

---

## Architecture & Tech Stack

- **Frontend Core**: Semantic HTML5, CSS3 Custom Properties, Responsive Fluid Grid
- **Typography**: Gloria Hallelujah, Noto Sans Tamil, Neue Haas Grotesk / Inter
- **Animations & Physics**: GSAP 3 (ScrollTrigger), Lenis Smooth Scroll
- **Dynamic Interactions**: Ambient mesh canvas, 3D card tilt haptics, video loop controllers, live IST clock
- **Contact Pipeline**: Asynchronous dispatch to `prathiish1926@gmail.com` with zero-backend FormSubmit cloud routing
- **Media Architecture**:
  - Hero Halftone Canvas
  - Pinned Architectural Skill Cards
  - Passions & Pursuits Revolving Ribbon Showcase (Wildlife Photography & Cinematography)
- **CMS Interoperability**: Dual compatibility with standalone static deployment and WordPress Avada child theme

---

## Domain & Deployment Setup

### Custom Domain: `workwithprathish.in`

This repository includes a `CNAME` file configured for `workwithprathish.in`.

#### DNS Records Configuration

Configure the following records in your domain registrar (GoDaddy, Namecheap, Cloudflare, Hostinger, etc.):

1. **Apex Domain (`@` / `workwithprathish.in`)**:
   - Type: `A` | Host: `@` | Value: `185.199.108.153`
   - Type: `A` | Host: `@` | Value: `185.199.109.153`
   - Type: `A` | Host: `@` | Value: `185.199.110.153`
   - Type: `A` | Host: `@` | Value: `185.199.111.153`

2. **Subdomain (`www`)**:
   - Type: `CNAME` | Host: `www` | Value: `<username>.github.io`

3. **GitHub Pages Settings**:
   - Go to **Settings > Pages**
   - **Source**: Deploy from a branch
   - **Branch**: `main` / `/ (root)`
   - **Custom domain**: `workwithprathish.in`
   - Check **Enforce HTTPS** (once certificates issue)

---

## Local Development

To run the portfolio locally:

```bash
# Start a simple HTTP server
npx serve .
# or using Python
python -m http.server 8080
```

Open `http://localhost:8080` in your browser.

---

## Author & Contact

- **Architect**: Prathish Raj
- **Inquiries**: [prathiish1926@gmail.com](mailto:prathiish1926@gmail.com)
- **Domain**: [workwithprathish.in](https://workwithprathish.in)

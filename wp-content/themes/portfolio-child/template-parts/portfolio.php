<?php
/**
 * Selected Work / Portfolio Section Template Part
 */
if (!defined('ABSPATH')) exit;
$theme_uri = get_stylesheet_directory_uri();
?>
<section class="section-portfolio" id="portfolio">
  <div class="portfolio-header-row">
    <div>
      <span class="section-label">/ Portfolio Projects</span>
      <h2 class="section-title" style="margin-bottom: 12px;">
        Selected <span class="accent-word">Work Samples</span>
      </h2>
      <p style="font-family: var(--font-sans); color: var(--awb-color7); margin: 0; font-size: 15px;">
        A carefully picked showcase of projects that highlight my commitment to this design industry.
      </p>
    </div>
    <div>
      <a href="https://prathishraj.com/portfolio/" class="menu-btn" style="background: var(--awb-color8); color: #fff; padding: 10px 22px;">
        Complete Portfolio &rarr;
      </a>
    </div>
  </div>

  <div class="portfolio-grid">
    <!-- Work Item 1 -->
    <div class="portfolio-card">
      <img src="<?php echo esc_url($theme_uri . '/assets/images/work-1.svg'); ?>" alt="AOJ Web Experience" width="1282" height="962" loading="lazy">
    </div>

    <!-- Work Item 2 -->
    <div class="portfolio-card">
      <img src="<?php echo esc_url($theme_uri . '/assets/images/work-2.svg'); ?>" alt="Enterprise UX &amp; System Architecture" width="1148" height="904" loading="lazy">
    </div>

    <!-- Work Item 3 -->
    <div class="portfolio-card">
      <img src="<?php echo esc_url($theme_uri . '/assets/images/work-3.svg'); ?>" alt="Cybersecurity &amp; Threat Detection Interface" width="1909" height="1079" loading="lazy">
    </div>

    <!-- Work Item 4 -->
    <div class="portfolio-card">
      <img src="<?php echo esc_url($theme_uri . '/assets/images/work-4.svg'); ?>" alt="AI Agents &amp; Cloud Workflows" width="1568" height="914" loading="lazy">
    </div>

    <!-- Full-width Bottom Banner Card -->
    <a href="https://prathishraj.com/portfolio/" class="portfolio-banner-card">
      <div class="portfolio-banner-sub">Click here to see my</div>
      <h3 class="portfolio-banner-title">Complete Portfolio</h3>
      <div class="portfolio-banner-desc">Updated portfolio showcase, as of September, 2025.</div>
    </a>
  </div>
</section>


<?php
/**
 * Hero Section Template Part - Prathish Raj Studio
 */
if (!defined('ABSPATH')) exit;
$theme_uri = get_stylesheet_directory_uri();
?>
<section class="intro-section atmospheric-studio" id="hero">
  <!-- Interactive Generative Ambient Canvas Background -->
  <div class="ambient-canvas-wrapper" aria-hidden="true">
    <canvas id="ambient-canvas"></canvas>
    <div class="ambient-noise-overlay"></div>
    <div class="ambient-vignette-overlay"></div>
  </div>

  <!-- Hero Main Content Row: Left Image Card, Right Merged Typography -->
  <div class="hero-inner-row">
    <!-- Left Column: 3D Portrait Card -->
    <div class="hero-left">
      <div class="card-pin">
        <div class="scroll-card">
          <div class="scroll-card-face scroll-card-front">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/prathish-hero.png'); ?>" alt="Prathish Raj" width="941" height="1672" loading="eager">
            <div class="card-glare" aria-hidden="true"></div>
          </div>
          <div class="scroll-card-face scroll-card-back">
            <video autoplay muted loop playsinline preload="auto" poster="<?php echo esc_url($theme_uri . '/assets/images/prathish-hero.png'); ?>" id="hero-card-video">
              <source src="<?php echo esc_url($theme_uri . '/assets/videos/videoplayback.mp4#t=10,22'); ?>" type="video/mp4">
              <source src="<?php echo esc_url($theme_uri . '/assets/videos/prathish-hero-promo.mp4'); ?>" type="video/mp4">
            </video>
            <div class="card-slideshow" id="card-about-slideshow" aria-label="About Me Slideshow">
              <div class="slideshow-track">
                <div class="slide-item active"><img src="<?php echo esc_url($theme_uri . '/assets/images/about-slideshow/slide-1.png'); ?>" alt="Audience Keynote"></div>
                <div class="slide-item"><img src="<?php echo esc_url($theme_uri . '/assets/images/about-slideshow/slide-2.png'); ?>" alt="AI Keynote Lecture"></div>
                <div class="slide-item"><img src="<?php echo esc_url($theme_uri . '/assets/images/about-slideshow/slide-3.jpg'); ?>" alt="Videography Production"></div>
                <div class="slide-item"><img src="<?php echo esc_url($theme_uri . '/assets/images/about-slideshow/slide-4.jpg'); ?>" alt="VR Meta Quest Demonstration"></div>
                <div class="slide-item"><img src="<?php echo esc_url($theme_uri . '/assets/images/about-slideshow/slide-5.jpg'); ?>" alt="Interactive Classroom Demo"></div>
              </div>
              <div class="slideshow-dots" aria-hidden="true">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
            <div class="card-back-overlay">
              <h3 class="card-back-title">Prathish Raj</h3>
              <p class="card-back-sub">Creative Technologist<br>&amp; UX Architect</p>
            </div>
            <div class="card-glare" aria-hidden="true"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column: Merged Wordings as Prathish Raj -->
    <div class="hero-right">
      <h1 class="hero-huge-title right-title">PRATHISH RAJ</h1>
      <div class="hero-role-tag">Design Systems, Cybersecurity &amp; AI Systems</div>
    </div>
  </div>

  <?php get_template_part('template-parts/brand-track'); ?>
</section>

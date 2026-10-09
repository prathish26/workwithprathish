<?php
/**
 * About Section Template Part & Metrics Marquee
 */
if (!defined('ABSPATH')) exit;

$metrics = array(
    '11+ Global Certifications',
    'Cybersecurity & IAM Specialist',
    'Penetration Testing & DevSecOps',
    'LLM Agents & Call Automation',
    'User Experience Design (UXD)',
    'Oracle Cloud Certified Professional'
);
?>

<section class="section-about" id="about">
  <div class="about-split-layout">
    <div class="about-col-content">
      <span class="section-label">/ Why Choose Me</span>
      <h2 class="about-editorial-heading">
        Built for Enterprise, <span class="accent-word" style="color: var(--awb-custom_color_2);">Not Just "Vibe Coded"</span>
      </h2>
      
      <p class="about-body-text">
        <strong>Enterprise Architecture · Zero-Trust Security · Autonomous AI Systems</strong><br>
        Anyone can prompt an LLM and "vibe code" a fragile prototype. But engineering autonomous intelligence that survives real enterprise workloads, resists adversarial attack surfaces, and scales deterministically requires deep architectural precision.
      </p>
      <p class="about-body-text">
        With an engineering background in Artificial Intelligence &amp; Data Science alongside credentials in offensive penetration testing and cloud platforms, I don’t build toy scripts; I architect resilient cloud-native infrastructure, hardened DevSecOps pipelines, and production-grade agentic systems designed for enterprise reliability.
      </p>
      <p class="about-body-text" style="color: var(--awb-color8); font-weight: 500;">
        Where others rely on unvetted AI generation, I deliver audited cybersecurity, resilient system architecture, and human-centered UX engineered to perform under pressure.
      </p>
    </div>

    <!-- Mobile / Tablet Responsive Fallback Card -->
    <div class="about-mobile-card-wrap" aria-hidden="true">
      <div class="about-mobile-card">
        <div class="card-slideshow is-active" id="mobile-about-slideshow">
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
      </div>
    </div>
  </div>

  <!-- Seamless Metrics Marquee Strip -->
  <div class="marquee-container" aria-hidden="true">
    <div class="marquee-track">
      <?php for ($i = 0; $i < 3; $i++): ?>
        <?php foreach ($metrics as $metric): ?>
          <div class="marquee-item">
            <span><?php echo esc_html($metric); ?></span>
            <span class="marquee-separator">/</span>
          </div>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
  </div>
</section>


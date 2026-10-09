<?php
/**
 * Footer Oversized CTA Marquee and Main Footer Template Part
 */
if (!defined('ABSPATH')) exit;
?>
<!-- Oversized Footer Scrolling Marquee -->
<div class="footer-cta-marquee" aria-hidden="true">
  <div class="footer-marquee-track">
    <?php for ($i = 0; $i < 6; $i++): ?>
      <span class="footer-marquee-text">Let’s work together &nbsp;&#10033;&nbsp;</span>
    <?php endfor; ?>
  </div>
</div>

<footer class="footer-main">
  <div class="footer-grid">
    <!-- Col 1: Bio & Live Time -->
    <div class="footer-col">
      <h3 style="font-family: var(--font-sans-semibold); font-size: 20px; color: #fff; margin: 0 0 10px 0;">Prathish Raj</h3>
      <p style="color: #8e8e8e; font-size: 14.5px; margin: 0 0 15px 0;">Based in Chennai, Tamil Nadu, India</p>
      <div style="font-size: 14px; color: #6d6d6d;">
        Current Local Time: <span class="js-local-time" style="color: #eaeaea; font-weight: 500;">00:00</span> (Asia/Kolkata, IST)
      </div>
    </div>

    <!-- Col 2: Navigation Links -->
    <div class="footer-col">
      <h4>Main menu</h4>
      <a href="#skills">Skills</a>
      <a href="#about">About</a>
      <a href="#experience">Experience</a>
      <a href="#contact">Contact</a>
    </div>

    <!-- Col 3: Contact Inquiries -->
    <div class="footer-col">
      <h4>Contact inquiries</h4>
      <a href="mailto:prathiish1926@gmail.com" class="copy-mail-btn" title="Click to copy email">prathiish1926@gmail.com</a>
      <a href="tel:+917904403394">+91 7904403394</a>
    </div>

    <!-- Col 4: Social Links -->
    <div class="footer-col">
      <h4>Social Media</h4>
      <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">LinkedIn</a>
      <a href="https://dribbble.com" target="_blank" rel="noopener noreferrer">Dribbble</a>
      <a href="https://behance.net" target="_blank" rel="noopener noreferrer">Behance</a>
      <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">Instagram</a>
      <a href="https://x.com" target="_blank" rel="noopener noreferrer">X / Twitter</a>
    </div>
  </div>

  <div class="footer-bottom-row">
    <div>&copy; <?php echo date('Y'); ?> Prathish Raj. All rights reserved.</div>
    <div>
      <a href="#hero" style="color: #8e8e8e; text-decoration: none;">Go to Top &uarr;</a>
    </div>
  </div>
</footer>


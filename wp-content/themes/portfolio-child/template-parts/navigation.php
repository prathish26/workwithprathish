<?php
/**
 * Navigation Bar Template Part
 */
if (!defined('ABSPATH')) exit;
?>
<!-- Mobile Sticky Header -->
<header class="mobile-sticky-header">
  <a href="#" class="mobile-logo">Prathish Raj ©</a>
  <button type="button" class="mobile-menu-trigger" aria-label="Toggle menu">
    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" stroke="currentColor" stroke-width="2">
      <line y1="1" x2="18" y2="1"/>
      <line y1="7" x2="18" y2="7"/>
      <line y1="13" x2="18" y2="13"/>
    </svg>
    Menu
  </button>
</header>

<!-- Desktop Bottom Floating Pill Navigation -->
<div class="bottom-fixed-nav-wrap">
  <nav class="main-navbar-inside" aria-label="Main Navigation">
    <a href="#" class="menu-btn btn-home" aria-label="Home">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
        <polyline points="9 22 9 12 15 12 15 22"/>
      </svg>
    </a>
    <a href="#skills" class="menu-btn">Skills</a>
    <a href="#about" class="menu-btn">About</a>
    <a href="#experience" class="menu-btn">Experience</a>
    <a href="#passions" class="menu-btn">Passions</a>
    <a href="#contact" class="menu-btn btn-cta">Contact me</a>
  </nav>
</div>


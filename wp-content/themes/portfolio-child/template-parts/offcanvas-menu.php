<?php
/**
 * Off-Canvas Mobile Drawer Template Part
 */
if (!defined('ABSPATH')) exit;
?>
<div id="mobile-menu-drawer" class="mobile-drawer" aria-hidden="true">
  <div class="drawer-header">
    <span class="drawer-title">Navigation</span>
    <button type="button" class="drawer-close-btn" aria-label="Close menu">&times;</button>
  </div>
  <nav class="drawer-links">
    <a href="#hero">Home</a>
    <a href="#skills">Skills</a>
    <a href="#about">About</a>
    <a href="#experience">Experience</a>
    <a href="#passions">Passions &amp; Pursuits</a>
    <a href="#faq">FAQ</a>
    <a href="#contact" class="drawer-cta">Contact me</a>
  </nav>
  <div class="drawer-footer">
    <p>Chennai, Tamil Nadu, India</p>
    <p><span class="js-local-time">00:00</span> (IST)</p>
  </div>
</div>

<style>
.mobile-drawer {
  position: fixed;
  top: 0;
  right: -100%;
  width: 85%;
  max-width: 380px;
  height: 100vh;
  background: #141617;
  color: #ffffff;
  z-index: 100000;
  padding: 30px 24px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: -10px 0 30px rgba(0,0,0,0.5);
  transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
.mobile-drawer.is-open {
  right: 0;
}
.drawer-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #282828;
  padding-bottom: 16px;
}
.drawer-title {
  font-family: var(--font-sans-medium);
  font-size: 18px;
}
.drawer-close-btn {
  background: transparent;
  border: none;
  color: #fff;
  font-size: 32px;
  line-height: 1;
  cursor: pointer;
}
.drawer-links {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin: 40px 0;
}
.drawer-links a {
  color: #eaeaea;
  text-decoration: none;
  font-family: var(--font-sans-medium);
  font-size: 20px;
  transition: color 0.2s ease;
}
.drawer-links a:hover {
  color: var(--awb-custom_color_2);
}
.drawer-links a.drawer-cta {
  background: var(--awb-custom_color_2);
  color: #ffffff;
  padding: 12px 20px;
  border-radius: 50px;
  text-align: center;
  margin-top: 10px;
}
.drawer-footer {
  border-top: 1px solid #282828;
  padding-top: 16px;
  color: #8e8e8e;
  font-size: 14px;
}
</style>


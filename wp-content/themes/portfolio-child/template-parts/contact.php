<?php
/**
 * Contact Form Section Template Part
 * Reconstructing Avada Form 895 with full CF7 interoperability
 */
if (!defined('ABSPATH')) exit;
?>
<section class="section-contact" id="contact">
  <span class="section-label">/ Contact Information</span>
  <h2 class="section-title">
    Let’s get <span class="accent-word">started</span>
  </h2>

  <div class="contact-form-box">
    <form id="prathish-contact-form" method="POST" action="https://formsubmit.co/prathiish1926@gmail.com">
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_template" value="table">
      <input type="hidden" name="_subject" value="New Portfolio Inquiry | Prathish Raj">
      <input type="hidden" name="_autoresponse" value="Thank you for reaching out to Prathish Raj. Your project inquiry has been received. Prathish will review your details and get in touch with you shortly.">
      <div class="contact-row-split">
        <div class="contact-field-wrap">
          <input type="text" name="your_name" id="your_name" class="contact-input" placeholder="John Smith *" required aria-required="true" autocomplete="name">
        </div>
        <div class="contact-field-wrap">
          <input type="text" name="your_position" id="your_position" class="contact-input" placeholder="Director, Recruiter, Client, etc. *" required aria-required="true">
        </div>
      </div>

      <div class="contact-field-wrap" style="margin-bottom: 20px;">
        <input type="email" name="your_e-mail_address" id="your_e-mail_address" class="contact-input" placeholder="mail@example.com *" required aria-required="true" autocomplete="email">
      </div>

      <!-- Custom Radio Pill Selection -->
      <div class="contact-radio-group">
        <label class="contact-radio-label selected">
          <input type="radio" name="your_status" value="I have a project" checked>
          <span>I have a project</span>
        </label>
        <label class="contact-radio-label">
          <input type="radio" name="your_status" value="I am a recruiter">
          <span>I am a recruiter</span>
        </label>
      </div>

      <div class="contact-field-wrap" style="margin-bottom: 24px;">
        <textarea name="project_scope" id="project_scope" class="contact-input" rows="4" placeholder="What’s the project scope? *" required aria-required="true"></textarea>
      </div>

      <button type="submit" class="contact-submit-btn">
        <span>Submit</span> &rarr;
      </button>

      <div id="contact-status-msg" class="contact-status-msg" role="alert"></div>
    </form>
  </div>
</section>


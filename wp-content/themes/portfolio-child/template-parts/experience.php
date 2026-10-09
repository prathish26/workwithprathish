<?php
/**
 * Career / Work Experience Template Part
 * Derived from Prathish Raj Resume
 */
if (!defined('ABSPATH')) exit;

$experiences = array(
    array(
        'role'    => 'User Experience Designer / Analyst',
        'dates'   => 'DEC 2025 - JUN 2026',
        'company' => 'Avasoft · Chennai, India',
    ),
    array(
        'role'    => 'Drone Security & Automation Intern',
        'dates'   => 'JUN 2025 - JUL 2025',
        'company' => 'NTech.labs · Chennai, India',
    ),
    array(
        'role'    => 'Penetration Testing Intern',
        'dates'   => 'FEB 2025 - MAR 2025',
        'company' => 'Cybertronium Sdn.Bhd. · Malaysia',
    ),
    array(
        'role'    => 'AI Call Automation Intern',
        'dates'   => 'JUN 2024 - JUL 2024',
        'company' => 'Preston Consulting and EdTech Pvt Ltd · Chennai, India',
    ),
    array(
        'role'    => 'Multi-Media Intern',
        'dates'   => 'JUN 2023 - JUL 2023',
        'company' => 'Kynhood Technologies Private Limited · Chennai, India',
    ),
);
?>

<section class="section-experience workexperience" id="experience">
  <span class="section-label">/ Career &amp; Experience</span>
  <h2 class="section-title">Work Experience</h2>

  <div class="experience-list">
    <?php foreach ($experiences as $idx => $exp): ?>
      <?php if ($idx > 0): ?>
        <div class="experience-divider"></div>
      <?php endif; ?>
      <div class="experience-row">
        <div class="experience-role"><?php echo esc_html($exp['role']); ?></div>
        <div class="experience-details">
          <span class="experience-dates"><?php echo esc_html($exp['dates']); ?></span>
          <span class="experience-company"><?php echo esc_html($exp['company']); ?></span>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>


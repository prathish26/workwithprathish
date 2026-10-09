<?php
/**
 * Projects Section Template Part - Professional & Freelance Projects
 * Replaces legacy awards list with real engineering & client deployments
 */
if (!defined('ABSPATH')) exit;

$professional_projects = array(
    array(
        'index'    => '01',
        'title'    => 'AI Phishing Detection Extension',
        'desc'     => 'Browser Security & Deep Learning URL/DOM Threat Classifier',
        'category' => 'Cybersecurity & AI',
        'url'      => '',
    ),
    array(
        'index'    => '02',
        'title'    => 'Pallanguzhi MR Game (HoloLens 2)',
        'desc'     => 'Traditional Tamil Heritage Board Game in Spatial Mixed Reality',
        'category' => 'Mixed Reality / MR',
        'url'      => '',
    ),
    array(
        'index'    => '03',
        'title'    => 'Web App Vulnerability Scanner',
        'desc'     => 'Automated OWASP Top 10 Auditing & Application Security Engine',
        'category' => 'DevSecOps & AppSec',
        'url'      => '',
    ),
    array(
        'index'    => '04',
        'title'    => 'Desktop Automation Assistant',
        'desc'     => 'System Task Orchestration, Voice Triggers & Autonomous RPA',
        'category' => 'Automation & Agents',
        'url'      => '',
    ),
    array(
        'index'    => '05',
        'title'    => 'AI Mental Health Chatbot & Call Bot',
        'desc'     => 'Conversational Empathy Engine with Real-Time Telephony & Voice Synthesis',
        'category' => 'Voice AI & Telephony',
        'url'      => '',
    ),
);

$freelance_projects = array(
    array(
        'index'    => '06',
        'title'    => 'elyra.in',
        'desc'     => 'Intelligent Enterprise Architecture & Brand Experience Substrate',
        'category' => 'Live Platform ↗',
        'url'      => 'https://elyra.in/',
    ),
    array(
        'index'    => '07',
        'title'    => 'ERP Church Management System',
        'desc'     => 'Multi-Branch Operations, Member Registry, Schedules & Financial Ledger',
        'category' => 'Enterprise ERP',
        'url'      => '',
    ),
    array(
        'index'    => '08',
        'title'    => 'Sales Call Automation',
        'desc'     => 'Autonomous AI Voice Agent for Inbound/Outbound Calling, Lead Qualification & CRM Sync',
        'category' => 'Voice AI & Sales',
        'url'      => '',
    ),
);
?>

<section class="section-awards section-projects" id="awards">
  <span class="section-label">/ Key Works &amp; Deployments</span>
  <h2 class="section-title">
    <span class="accent-word">Professional</span> &amp; Freelance Projects
  </h2>
  
  <div class="awards-intro projects-intro">
    <p>Proven execution across cybersecurity defense, spatial mixed reality, autonomous agents, and enterprise ERP architectures.</p>
    <p>Each deployment reflects deep technical rigour, clean system design, and measurable real-world utility.</p>
  </div>

  <div class="projects-container">
    <!-- Professional Projects Group -->
    <div class="projects-subgroup">
      <div class="projects-group-header">
        <h3 class="projects-group-title">Professional Projects</h3>
      </div>
      <div class="awards-list projects-list">
        <?php foreach ($professional_projects as $proj): ?>
          <div class="award-row project-row">
            <span class="award-index project-index"><?php echo esc_html($proj['index']); ?></span>
            <span class="award-title project-title"><?php echo esc_html($proj['title']); ?></span>
            <span class="award-org project-desc"><?php echo esc_html($proj['desc']); ?></span>
            <span class="award-date project-badge">
              <span class="project-tag-pill"><?php echo esc_html($proj['category']); ?></span>
            </span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Freelance Projects Group -->
    <div class="projects-subgroup freelance-subgroup">
      <div class="projects-group-header">
        <h3 class="projects-group-title">Freelance Projects</h3>
      </div>
      <div class="awards-list projects-list">
        <?php foreach ($freelance_projects as $proj): ?>
          <?php if (!empty($proj['url'])): ?>
            <a href="<?php echo esc_url($proj['url']); ?>" class="award-row project-row project-row-link" target="_blank" rel="noopener noreferrer" title="Visit <?php echo esc_attr($proj['title']); ?>">
              <span class="award-index project-index"><?php echo esc_html($proj['index']); ?></span>
              <span class="award-title project-title">
                <?php echo esc_html($proj['title']); ?>
                <span class="link-arrow-icon" aria-hidden="true">↗</span>
              </span>
              <span class="award-org project-desc"><?php echo esc_html($proj['desc']); ?></span>
              <span class="award-date project-badge">
                <span class="project-tag-pill pill-live"><?php echo esc_html($proj['category']); ?></span>
              </span>
            </a>
          <?php else: ?>
            <div class="award-row project-row">
              <span class="award-index project-index"><?php echo esc_html($proj['index']); ?></span>
              <span class="award-title project-title"><?php echo esc_html($proj['title']); ?></span>
              <span class="award-org project-desc"><?php echo esc_html($proj['desc']); ?></span>
              <span class="award-date project-badge">
                <span class="project-tag-pill"><?php echo esc_html($proj['category']); ?></span>
              </span>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

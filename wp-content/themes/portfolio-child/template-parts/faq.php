<?php
/**
 * FAQ Accordion Section Template Part
 */
if (!defined('ABSPATH')) exit;

$faqs = array(
    array(
        'q' => 'How do you ensure high-quality work?',
        'a' => 'I follow industry standards, use professional-grade tools, and maintain rigorous attention to detail in every project, double-checking usability, performance, and responsive integrity across real devices.'
    ),
    array(
        'q' => 'What industries and clients have you worked with?',
        'a' => 'I’ve collaborated with a diverse range of clients, from high-growth startups to established brands, delivering design, web, video, and marketing collateral across tech, cyber security, SaaS, and creative agencies.'
    ),
    array(
        'q' => 'Do you work independently or as part of a team?',
        'a' => 'Both. I thrive leading teams and working alongside them. In multiple leadership positions, I’ve successfully led design and marketing initiatives while maintaining hands-on execution speed.'
    ),
    array(
        'q' => 'What makes you a good team player?',
        'a' => 'Clear communication, openness to feedback, and a collaborative mindset: I value the collective team’s momentum and product success as much as individual execution.'
    ),
    array(
        'q' => 'How do you approach client feedback?',
        'a' => 'I listen carefully, digest feedback objectively, and iterate rapidly to align the deliverables with strategic goals while maintaining visual and functional standards.'
    ),
    array(
        'q' => 'Have you handled large or complex projects?',
        'a' => 'Yes. I have successfully managed long-term, multi-faceted projects, breaking them into clear phases to deliver quality on time, from MVP conception all the way through GTM scaling.'
    ),
    array(
        'q' => 'Why do clients trust you?',
        'a' => 'Clients appreciate my reliability, my commitment to their goals, and my ability to translate abstract visions into high-impact, measurable digital products.'
    ),
    array(
        'q' => 'If you build agency, why apply for an in-house role?',
        'a' => 'I enjoy focusing deep creative energy on one core product and mission, combining entrepreneurial drive with the focus that comes from unified in-house teams.'
    )
);
?>

<section class="section-faq" id="faq">
  <span class="section-label">/ Common questions and answers</span>
  <h2 class="section-title">
    Frequently Asked <span class="accent-word">Questions</span>
  </h2>

  <div class="faq-grid">
    <?php foreach ($faqs as $item): ?>
      <div class="faq-panel">
        <button type="button" class="faq-question-btn" aria-expanded="false">
          <span><?php echo esc_html($item['q']); ?></span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer">
          <p><?php echo esc_html($item['a']); ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>


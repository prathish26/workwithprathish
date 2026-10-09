<?php
/**
 * Testimonials & Reviews Section Template Part
 */
if (!defined('ABSPATH')) exit;

$reviews = array(
    array(
        'author'   => 'Shelley J.',
        'category' => 'Web Design & Development',
        'date'     => 'September 2026',
        'quote'    => 'If you need an engineer who is both the technical depth behind the system and the architect behind the UX, Prathish is who you’ll want to hit up. I’ve worked with Prathish on collaborative projects and his output is consistently top tier.'
    ),
    array(
        'author'   => 'Giovanni',
        'category' => 'Website & Product Engineering',
        'date'     => 'March 2026',
        'quote'    => 'I asked and Prathish delivered honestly. I didn\'t want a generic site, I wanted an intelligent platform I could scale and actually be proud of. He got that instantly and gave me what I needed without endless back-and-forth.'
    ),
    array(
        'author'   => 'Engineering Lead',
        'category' => 'AI Systems & Vibe Coding',
        'date'     => 'February 2026',
        'quote'    => 'Prathish Raj is uniquely talented bridging rapid prototyping, vibe coding, and high-end design directions. He combines design thinking with AI acceleration that sped up our entire release cadence.'
    )
);
?>

<section class="section-testimonials faded-cards" id="testimonials">
  <span class="section-label">/ Community Trust &middot; Testimonials</span>
  <h2 class="section-title">
    What <span class="accent-word">people</span> say
  </h2>
  <p style="font-family: var(--font-sans); color: var(--awb-color7); font-size: 15px; margin-top: -30px; margin-bottom: 40px;">
    A few thoughts from people who have experienced the value of working together.
  </p>

  <div class="testimonials-grid">
    <?php foreach ($reviews as $rev): ?>
      <div class="testimonial-card">
        <div>
          <div class="testimonial-stars" aria-label="5 out of 5 stars">
            &#9733;&#9733;&#9733;&#9733;&#9733;
          </div>
          <p class="testimonial-quote">&ldquo;<?php echo esc_html($rev['quote']); ?>&rdquo;</p>
        </div>
        <div class="testimonial-author-row">
          <div class="testimonial-author"><?php echo esc_html($rev['author']); ?></div>
          <div class="testimonial-category"><?php echo esc_html($rev['category']); ?></div>
          <div class="testimonial-date"><?php echo esc_html($rev['date']); ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>


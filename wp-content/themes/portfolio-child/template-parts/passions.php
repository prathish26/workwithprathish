<?php
/**
 * Passions & Pursuits Template Part - Wildlife Photography & Cinematography
 * Clean single-scroll revolving gallery without badges or filter buttons
 */
if (!defined('ABSPATH')) exit;

$gallery_items = array(
    array(
        'title'    => 'Asiatic Lion',
        'file'     => 'gallery-1-asiatic-lion.jpg',
    ),
    array(
        'title'    => 'White-throated Kingfisher',
        'file'     => 'gallery-6-white-throated-kingfisher.jpeg',
    ),
    array(
        'title'    => 'Porsche 911',
        'file'     => 'gallery-9-porsche-911.jpg',
    ),
    array(
        'title'    => 'Indian Pond Heron: A Sequence of Flight',
        'file'     => 'gallery-13-indian-pond-heron-a-sequence-of-flight.jpeg',
    ),
    array(
        'title'    => 'Urban Layers',
        'file'     => 'gallery-8-urban-layers.jpg',
    ),
    array(
        'title'    => 'Asiatic Lioness',
        'file'     => 'gallery-4-asiatic-lioness.jpg',
    ),
    array(
        'title'    => 'Corendon Airlines Boeing 737',
        'file'     => 'gallery-11-corendon-airlines-boeing-737.jpg',
    ),
    array(
        'title'    => 'KL Under Dark Skies',
        'file'     => 'gallery-14-kl-under-dark-skies.jpg',
    ),
    array(
        'title'    => 'Lamborghini Gallardo',
        'file'     => 'gallery-10-lamborghini-gallardo.jpg',
    ),
    array(
        'title'    => 'Mugger Crocodile',
        'file'     => 'gallery-3-mugger-crocodile.jpg',
    ),
    array(
        'title'    => 'Grey Heron & Indian Pond Heron',
        'file'     => 'gallery-5-grey-heron-and-indian-pond-heron.jpeg',
    ),
    array(
        'title'    => 'Cormorant',
        'file'     => 'gallery-12-cormorant.jpeg',
    ),
    array(
        'title'    => 'Little Egret',
        'file'     => 'gallery-7-little-egret.jpg',
    ),
    array(
        'title'    => 'Indian Pond Heron',
        'file'     => 'gallery-2-indian-pond-heron.jpeg',
    ),
);

$image_base = get_stylesheet_directory_uri() . '/assets/images/gallery/';
?>

<section class="section-passions" id="passions">
  <div class="passions-container">
    <div class="passions-header">
      <span class="section-label">/ Passions &amp; Pursuits</span>
      <h2 class="section-title">
        Wildlife Photography &amp; <span class="accent-word">Cinematography</span>
      </h2>
      <p class="passions-intro-text">
        Beyond enterprise infrastructure, zero-trust security architecture, and autonomous AI systems, I explore the world through high-speed telephoto glass and cinematic composition. Whether tracking wild predators across natural ecosystems or framing high-velocity automotive and architectural silhouettes, I illuminate the unseen beauty of the world one frame at a time.
      </p>
    </div>

    <!-- Clean Single Scroll Gallery Showcase (Theme-Aligned) -->
    <div class="passions-showcase-wrap">
      <div class="showcase-top-bar">
        <div class="showcase-heading-group">
          <span class="showcase-mini-label">/ Visual Stream</span>
          <h3 class="showcase-title">Featured Frames</h3>
        </div>
      </div>

      <!-- Single Revolving Stream Track -->
      <div class="revolving-stream-track stream-single-row" aria-label="Revolving Wildlife &amp; Cinematography Stream">
        <div class="stream-conveyor conveyor-forward">
          <?php for ($loop = 0; $loop < 2; $loop++): ?>
            <?php foreach ($gallery_items as $item): ?>
              <div class="gallery-slide-card" data-title="<?php echo esc_attr($item['title']); ?>" data-src="<?php echo esc_url($image_base . $item['file']); ?>">
                <div class="slide-media-wrapper">
                  <img src="<?php echo esc_url($image_base . $item['file']); ?>" alt="<?php echo esc_attr($item['title']); ?>" class="slide-img" loading="lazy">
                  <div class="slide-gradient-overlay">
                    <span class="slide-card-title"><?php echo esc_html($item['title']); ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endfor; ?>
        </div>
      </div>

      <div class="stream-bottom-hint">
        <span class="hint-bullet">●</span>
        <span>Revolving stream automatically pauses on hover · Click any frame for high-resolution inspection</span>
      </div>
    </div>
  </div>

  <!-- Lightbox Modal (Clean, No Badge, No Description) -->
  <div id="passions-lightbox" class="passions-lightbox-modal" aria-hidden="true" role="dialog">
    <div class="lightbox-backdrop"></div>
    <div class="lightbox-dialog">
      <button type="button" class="lightbox-close-btn" aria-label="Close Lightbox">&times;</button>
      <div class="lightbox-frame">
        <img src="" alt="" id="lightbox-full-img" class="lightbox-full-img">
      </div>
      <div class="lightbox-info">
        <h4 id="lightbox-title" class="lightbox-title">Asiatic Lion</h4>
      </div>
    </div>
  </div>
</section>

<?php
/**
 * Brand Logo Track Template Part - Infinite Scrolling Client / Partner Marquee
 * Featured Brands: KYN, GOstudy, Cybertronium, IonAerospace, Avasoft, Zeb, Elyra
 */
if (!defined('ABSPATH')) exit;
$theme_uri = get_stylesheet_directory_uri();

$brands = array(
  array(
    'id'    => 'kyn',
    'name'  => 'KYN',
    'desc'  => 'Hyperlocal Community & Media Platform',
    'logo'  => $theme_uri . '/assets/images/kyn.png',
    'url'   => 'https://www.kynhood.com/',
    'is_img'=> true,
    'h'     => 38,
  ),
  array(
    'id'    => 'gostudy',
    'name'  => 'GOstudy',
    'desc'  => 'Global Education Advisory & Platforms',
    'logo'  => $theme_uri . '/assets/images/gostudy.png',
    'url'   => 'https://www.go.study/',
    'is_img'=> true,
    'h'     => 32,
  ),
  array(
    'id'    => 'cybertronium',
    'name'  => 'Cybertronium',
    'desc'  => 'Global Cybersecurity Defense & Academy',
    'logo'  => $theme_uri . '/assets/images/cybertronium.svg',
    'url'   => 'https://www.cybertronium.com/',
    'is_img'=> true,
    'h'     => 34,
  ),
  array(
    'id'    => 'ionaerospace',
    'name'  => 'IonAerospace',
    'desc'  => 'Space & Propulsion Engineering',
    'logo'  => $theme_uri . '/assets/images/ionaerospace.svg',
    'url'   => '#',
    'is_img'=> true,
    'h'     => 32,
  ),
  array(
    'id'    => 'avasoft',
    'name'  => 'Avasoft',
    'desc'  => 'NextGen Cloud & Enterprise AI Solutions',
    'logo'  => $theme_uri . '/assets/images/avasoft.svg',
    'url'   => 'https://www.avasoft.com/',
    'is_img'=> true,
    'h'     => 30,
  ),
  array(
    'id'    => 'zeb',
    'name'  => 'Zeb',
    'desc'  => 'AI-Native Digital Transformation & Substrate',
    'logo'  => $theme_uri . '/assets/images/zeb.svg',
    'url'   => 'https://zeb.co/',
    'is_img'=> true,
    'h'     => 26,
  ),
  array(
    'id'    => 'elyra',
    'name'  => 'Elyra Technologies',
    'desc'  => 'Intelligent Enterprise Architecture',
    'logo'  => $theme_uri . '/assets/images/elyra.png',
    'url'   => 'https://elyra.in/',
    'is_img'=> true,
    'h'     => 44,
  ),
);
?>

<section class="section-brand-track" id="brand-track" aria-label="Partner & Client Network">
  <div class="brand-track-inner">
    <div class="brand-track-header">
      <span class="brand-track-bullet"></span>
      <span class="brand-track-tagline">TEAMS &amp; BRANDS WORKED WITH</span>
    </div>

    <div class="brand-marquee-viewport" tabindex="0" role="region" aria-label="Scrolling brand logos">
      <div class="brand-marquee-track">
        <!-- Sequence 1 -->
        <div class="brand-marquee-group" aria-hidden="false">
          <?php foreach ($brands as $brand): ?>
            <a href="<?php echo esc_url($brand['url']); ?>" 
               class="brand-track-item brand-<?php echo esc_attr($brand['id']); ?>" 
               target="<?php echo ($brand['url'] !== '#') ? '_blank' : '_self'; ?>" 
               rel="noopener noreferrer"
               title="<?php echo esc_attr($brand['name'] . ' · ' . $brand['desc']); ?>"
               data-brand="<?php echo esc_attr($brand['id']); ?>">
              <img src="<?php echo esc_url($brand['logo']); ?>" 
                   alt="<?php echo esc_attr($brand['name']); ?> logo" 
                   style="height: <?php echo intval($brand['h']); ?>px;"
                   loading="lazy" 
                   decoding="async">
            </a>
          <?php endforeach; ?>
        </div>

        <!-- Sequence 2 (Duplicate for seamless infinite marquee loop) -->
        <div class="brand-marquee-group" aria-hidden="true">
          <?php foreach ($brands as $brand): ?>
            <a href="<?php echo esc_url($brand['url']); ?>" 
               class="brand-track-item brand-<?php echo esc_attr($brand['id']); ?>" 
               tabindex="-1"
               target="<?php echo ($brand['url'] !== '#') ? '_blank' : '_self'; ?>" 
               rel="noopener noreferrer"
               title="<?php echo esc_attr($brand['name'] . ' · ' . $brand['desc']); ?>"
               data-brand="<?php echo esc_attr($brand['id']); ?>">
              <img src="<?php echo esc_url($brand['logo']); ?>" 
                   alt="<?php echo esc_attr($brand['name']); ?> logo" 
                   style="height: <?php echo intval($brand['h']); ?>px;"
                   loading="lazy" 
                   decoding="async">
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


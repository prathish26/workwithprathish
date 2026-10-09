<?php
/**
 * Template Name: Portfolio Home (Full Fidelity)
 *
 * @package PortfolioChild
 */

if (!defined('ABSPATH')) exit;

get_header();
?>

<main id="portfolio-main-wrapper" class="portfolio-main-wrapper">
  <?php
  // Modular Section Includes
  get_template_part('template-parts/preloader');
  get_template_part('template-parts/navigation');
  get_template_part('template-parts/hero');
  get_template_part('template-parts/skills');
  get_template_part('template-parts/about');
  get_template_part('template-parts/awards');
  get_template_part('template-parts/manifesto');
  get_template_part('template-parts/experience');
  get_template_part('template-parts/passions');
  get_template_part('template-parts/faq');
  get_template_part('template-parts/contact');
  get_template_part('template-parts/footer-cta');
  get_template_part('template-parts/offcanvas-menu');
  ?>
</main>

<?php
get_footer();


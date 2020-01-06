
<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<main id="contact">
<section id="contact-form" class="sec">
<div class="wrap">
<?php echo do_shortcode('[contact-form-7 id="28" title="contact"]'); ?>
</div>
</section>
</main>
<?php get_footer();

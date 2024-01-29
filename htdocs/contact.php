<?php
define('WP_DEBUG', true);
/*
Template Name: Contact
*/
get_header();?>
  
<section>
  <div class="container py-5">
    <div class="row py-2">
      <div class="col-8 d-block mx-auto">
        <p class="text-center mb-4">You're at contact.</p>
        <?php echo do_shortcode('[contact-form-7 id="f1e68ec" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
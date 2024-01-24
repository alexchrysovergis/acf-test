<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="container-fluid p-3">
      <nav class="navbar navbar-expand-lg d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>

        <div class="d-flex justify-content-center">
          <ul class="navbar-nav">
            <li class="nav-item">
             <?php wp_nav_menu(array('theme_location' => 'headerMenuLocation'));
            ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Fashion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Hero Section -->
    <section class="hero-section text-center text-white">
      <div class="container-fluid p-0">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php
            $args = array(
              'post_type' => 'page',
              'posts_per_page' => -1,
            );

            $slider_query = new WP_Query($args);

            if ($slider_query->have_posts()) :
              $first_slide = true;
              while ($slider_query->have_posts()) : $slider_query->the_post();

                $slide_image_1 = get_field('slide_image');
                $slide_caption_1 = get_field('slide_caption');
                $slide_image_2 = get_field('slide_image_2');
                $slide_caption_2 = get_field('slide_caption_2');

                if (!empty($slide_image_2)) :
            ?>
                  <div class="carousel-item<?php echo $first_slide ? ' active' : ''; ?>">
                    <img src="<?php echo esc_url($slide_image_2['url']); ?>" class="d-block w-100 img-fluid" style="height: 80vh; object-fit: cover;" alt="<?php echo esc_attr($slide_image_2['alt']); ?>">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><?php echo esc_html($slide_caption_2); ?></h5>
                    </div>
                  </div>
            <?php
                endif;
                ?>
                <div class="carousel-item<?php echo $first_slide ? ' active' : ''; ?>">
                  <img src="<?php echo esc_url($slide_image_1['url']); ?>" class="d-block w-100 img-fluid" style="height: 80vh; object-fit: cover;" alt="<?php echo esc_attr($slide_image_1['alt']); ?>">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo esc_html($slide_caption_1); ?></h5>
                  </div>
                </div>
            <?php
                $first_slide = false;
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
  </header>
</body>
</html>

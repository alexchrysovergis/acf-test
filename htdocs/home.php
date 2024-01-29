<?php
/*
Template Name: Front Page
*/
get_header();?>
  
<div class="container-fluid hero-carousel">
<?php
if (have_rows('slider')) :
    ?>
    <div id="acf-test-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            $indicator_index = 0;
            while (have_rows('slider')) : the_row();
                ?>
                <button type="button" data-bs-target="#acf-test-carousel" data-bs-slide-to="<?php echo $indicator_index; ?>" <?php echo ($indicator_index === 0) ? 'class="active"' : ''; ?> aria-current="true" aria-label="Slide <?php echo $indicator_index + 1; ?>"></button>
                <?php
                $indicator_index++;
            endwhile;
            ?>
        </div>
        <div class="carousel-inner">
            <?php
            $item_index = 0;
            while (have_rows('slider')) : the_row();
                $slider_image = get_sub_field('slider_image');
                ?>
                <div class="carousel-item <?php echo ($item_index === 0) ? 'active' : ''; ?> custom-carousel-item">
                    <div class="aspect-ratio-container">
                        <img src="<?php echo $slider_image['url']; ?>" class="d-block w-100 h-100 object-cover" alt="<?php echo $slider_image['alt']; ?>">
                    </div>
                </div>
                <?php
                $item_index++;
            endwhile;
            ?>
        </div>
    </div>
    <?php
else :
    echo 'No sliders found';
endif;
?>
</div> 
<?php get_footer();?>


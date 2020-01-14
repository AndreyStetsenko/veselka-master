<?php
/*
Template Name: Галерея
*/
get_header();
?>

    <?php require('inc/posthead.php'); ?>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Наша галерея</span>
            <h2 class="text-black">Галерея наших детей</h2>
          </div>
        </div>
        <?php if(get_field('gallery', 'option')): ?>
            <div class="row">
              	<?php while(has_sub_field('gallery', 'option')): ?>
                <div class="col-md-3 mb-4">
            		<a href="<?php the_sub_field('gallery_ph'); ?>" data-fancybox="gal"><img src="<?php the_sub_field('gallery_ph'); ?>" alt="Image" class="img-fluid"></a>
         		</div>
              <?php endwhile; ?>
            </div>
         <?php endif; ?>
      </div>
    </div>
<?php get_footer(); ?>
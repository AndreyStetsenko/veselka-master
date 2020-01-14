<?php
/*
Template Name: О садике
*/
get_header();
?>

    <?php require('inc/posthead.php'); ?>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile; ?>
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() . '/images/img_1.jpg' ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto pl-md-5">
            <span class="text-cursive h5 text-red">О нас</span>
            <h3 class="text-black">Дарите веселую жизнь своим детям!</h3>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et harum, magni sequi nostrum maxime enim.</span><span>Magnam id atque dicta deleniti, ipsam ipsum distinctio. Facilis praesentium voluptatem accusamus, earum veritatis, laudantium.</span></p>

            <p class="mt-5"><a href="#" class="btn btn-warning py-4 btn-custom-1">О садике</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-teal">
      <div class="container">
        <div class="row justify-content-center text-center mb-5 section-2-title">
          <div class="col-md-6">
            <h3 class="text-white text-center">Наша команда</h3>
            <p class="mb-5">Люди которые позаботятся о вашем ребенке, сделают его умнее и счастливее!</p>
          </div>
        </div>
        <div class="row align-items-stretch">

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 teal">

                <img src="<?php echo get_template_directory_uri() . '/images/person_1.jpg' ?>" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 yellow">

                <img src="<?php echo get_template_directory_uri() . '/images/person_2.jpg' ?>" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 red">

                <img src="<?php echo get_template_directory_uri() . '/images/person_3.jpg' ?>" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 green">

                <img src="<?php echo get_template_directory_uri() . '/images/person_4.jpg' ?>" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 blue">

                <img src="<?php echo get_template_directory_uri() . '/images/person_5.jpg' ?>" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 red">

                <img src="<?php echo get_template_directory_uri() . '/images/person_1.jpg' ?>" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
<?php get_footer(); ?>
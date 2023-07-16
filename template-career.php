<?php
/*
Template Name: Careers Template
*/
get_header(); ?>
<main>
  <section class="careers_area section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center about_features">
            <div class="features_text">
              <h2><?php the_field('career_heading'); ?></h2>
              <p><?php the_field('career_description'); ?></p>
              <a href="#job" class="btn-2"><?php the_field('browse_button_text'); ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="careers-img">
            <img src="<?php the_field('left_image'); ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="careers-img">
            <img src="<?php the_field('right_image'); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- platform area strat -->
  <section class="careers-icon section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center  ">
            <div class="features_text trusted_box">
              <p class="section_btn"><?php the_field('values_subtitle'); ?></p>
              <h2> <?php the_field('values_heading'); ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php if (have_rows('values_item')) :
          while (have_rows('values_item')) : the_row(); ?>
            <div class="col-lg-4 col-md-6  ">
              <div class="social_icon">
                <div class="social_img  ">
                  <div class="social social-bg1" style="background:<?php the_sub_field("values_icon_colors"); ?>">
                    <img src=" <?php the_sub_field('item_icon'); ?>" alt="">
                  </div>
                  <div class="social_text">
                    <h3><?php the_sub_field('item_title'); ?></h3>
                  </div>
                </div>
                <p><?php the_sub_field('item_description'); ?></p>
              </div>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>


      </div>
    </div>
  </section>

  <section class="current-job join_area section_padding">
    <div class="container" id="job">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center  ">
            <div class="features_text trusted_box">

              <h2><?php the_field('jobs_heading'); ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php
        $careers = new WP_Query(array(
          'post_type' => 'careers',
          'posts_per_page' => 4,
          'order' => 'ASC'

        ));
        if ($careers->have_posts()) :
          while ($careers->have_posts()) : $careers->the_post()
        ?>
            <div class="col-md-6">
              <div class="web-desgn">
                <h3><?php the_field('career_title'); ?></h3>
                <ul class="d-flex align-items-center">
                  <li><a href="#"><?php the_field('job_location'); ?></a></li>
                  <li><a href="#" class="web-link"><?php the_field('job_type'); ?></a></li>
                </ul>
                <p><?php the_field('job_description'); ?></p>
                <a href="#" class="btn-2">Apply Now</a>
              </div>
            </div>
        <?php endwhile;
        endif; ?>

      </div>
    </div>

  </section>



</main>

<?php get_footer(); ?>
<?php
/*
Template Name: About Template
*/
get_header(); ?>
<main>
  <section class="about_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center about_features">
            <div class="features_text">
              <h2><?php the_field('about_heading'); ?></h2>
              <p><?php the_field('about_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row about-img-box">
        <div class="col-md-8">
          <div class="about-img">
            <img src="<?php the_field('about_left_image'); ?>" alt="about-img">
          </div>
        </div>
        <div class="col-md-4">
          <div class="about-img1">
            <img src="<?php the_field('about_right_image'); ?>" alt="about-img">
          </div>
        </div>
      </div>
      <div class="row about_text_box">
        <div class="col-md-4">
          <div class="about-text">
            <h2><?php the_field('wwd_title'); ?></h2>
          </div>
        </div>
        <div class="col-md-8">
          <div class="about-discrition">
            <?php the_field('wwd_description'); ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="counter-box d-flex justify-content-between text-center">

            <?php
            $i =  1;
            if (have_rows('counter')) :
              while (have_rows('counter')) : the_row();
            ?>
                <div class="counter-text text-center">
                  <div class="counter-h text-center">
                    <h2 class="counter<?php echo $i; ?>"><?php the_sub_field('number_count'); ?> </h2>
                    <h2 class="ck"><?php the_sub_field('count_quantity'); ?></h2>
                  </div>
                  <p><?php the_sub_field('count_description'); ?></p>
                </div>
            <?php $i++;
              endwhile;
            endif;
            wp_reset_postdata();
            ?>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6">
          <div class="Mission">
            <h2><?php the_field('mission_heading'); ?></h2>
            <?php the_field('mission_description'); ?>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="mission_img">
            <img src="<?php the_field('mission_image'); ?>" alt="about-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="Our_values ">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center features_value">
            <div class="features_text">
              <p class="section_btn"><?php the_field('value_subtitle'); ?></p>
              <h2><?php the_field('values_heading'); ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php if (have_rows('value_items')) :
          while (have_rows('value_items')) : the_row();
        ?>
            <div class="col-xl-6">
              <div class="value_item">
                <div class="img">
                  <img src="<?php the_sub_field('item_image'); ?>" alt="about-img">
                </div>
                <div class="value_text">
                  <h3><?php the_sub_field('item_heading'); ?></h3>
                  <p><?php the_sub_field('item_description'); ?></p>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

      </div>
    </div>
  </section>

  <section class="join_area">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="join_heading sticky-top">
            <a href="#" class="btn-1"><?php the_field('career_subtitle'); ?></a>
            <h3><?php the_field('career_heading'); ?></h3>
          </div>
        </div>
        <div class="col-md-8">

          <?php
          $careers = new WP_Query(array(
            'post_type' => 'careers',
            'posts_per_page' => 4,
            'order' => 'ASC'

          ));
          if ($careers->have_posts()) :
            while ($careers->have_posts()) : $careers->the_post()
          ?>
              <div class="web-desgn">
                <h3><?php the_field('career_title'); ?></h3>
                <ul class="d-flex align-items-center">
                  <li><a href="#"><?php the_field('job_location'); ?></a></li>
                  <li><a href="#" class="web-link"><?php the_field('job_type'); ?></a></li>
                </ul>
                <p><?php the_field('job_description'); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-2">Apply Now</a>
              </div>
          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>

          <div class="web-desgn text-center web-desgn1 ">
            <h3><?php the_field('job_title'); ?></h3>
            <p class="web-p"><?php the_field('short_description'); ?></p>
            <a href="<?php the_field('apply_url'); ?>" class="btn-2 web-link2">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>



</main>

<?php get_footer(); ?>
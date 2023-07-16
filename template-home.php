<?php
$options = get_option('coderit');
// Template Name: Home Template
get_header('home'); ?>

<main>
  <section class="features_area section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center">
            <div class="features_text">
              <p class="section_btn"><?php the_field('feature_sub_title'); ?></p>
              <h2><?php the_field('feature_title'); ?></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">

        <?php

        $categories = get_terms([
          'taxonomy' => 'feature-category',
          // 'hide_empty' => false
        ]);

        // print_r($categories);




        $features = new WP_Query(array(
          'post_type' => 'features',
          'posts_per_page' => 3
        ));

        foreach ($categories as $category) {
          $category_slug = $category->slug;
          // echo $category_slug;
        };

        ?>

        <?php if ($category_slug == 'top-features') : ?>
          <?php while ($features->have_posts()) : $features->the_post(); ?>
            <div class="col-md-6 col-lg-4">
              <div class="features_item text-center">
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a href="#" class="stretched-link">Learn More</a>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata(); ?>

      </div>
    </div>
  </section>

  <!-- platform area strat -->
  <section class="plaform_area">
    <div class="container">
      <div class="row align-items-center platfom-background">
        <div class="col-lg-6">
          <div class="platform">
            <h2><?php the_field('platform_heading'); ?></h2>
            <p><?php the_field('platform_description'); ?></p>
            <div class="cost d-flex">
              <img src="<?php the_field('cost_effective_image'); ?>" loading="lazy" alt="cost-icon">
              <div class="cost-text">
                <h3><?php the_field('cost_effective'); ?></h3>
                <p><?php the_field('cost_effective_description'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="<?php the_field('platform_image'); ?>" loading="lazy" alt="platfomr-images">
        </div>
      </div>
    </div>
  </section>
  <!-- platform area end -->

  <!-- smarter area strat  -->
  <section class="smarter_area section_padding
    ">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center  ">
            <div class="features_text smarter_box">
              <p class="section_btn"><?php the_field('work_subtitle'); ?></p>
              <h2><?php the_field('work_title'); ?></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="row nav nav-pills">

        <?php
        $i = 0;
        if (have_rows('work_tab')) :
          while (have_rows('work_tab')) : the_row(); ?>
            <div class="col-md-4">
              <div class="smarter-item nav-link <?php if ($i == 0) {
                                                  echo "active";
                                                } ?>" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $i; ?>">
                <h3><?php echo get_sub_field('work_tab_title'); ?></h3>
              </div>
            </div>
        <?php $i++;
          endwhile;
        endif; ?>
      </div>

      <div class="row tab-content " id="pills-tabContent">

        <?php $i = 0; ?>
        <?php if (have_rows('work_tab')) : ?>
          <?php while (have_rows('work_tab')) : the_row(); ?>
            <div class="col-12 tab-pane fade <?php if ($i == 0) {
                                                echo "show active";
                                              }; ?>" id="pills-<?php echo $i; ?>">
              <div class="smarter-item-content">
                <div class="row">
                  <div class="col-md-6 create-text">
                    <div class="create d-flex align-items-center">
                      <a href=""><img src="<?php echo get_sub_field('work_item_icon'); ?>" alt=""></a>
                      <h3><?php echo get_sub_field('work_item_heading'); ?></h3>
                    </div>
                    <p><?php echo get_sub_field('work_item_description'); ?></p>
                    <a href="" class="btn-1 btn-over"><?php echo get_sub_field('work_item_button'); ?></a>
                  </div>
                  <div class="col-md-6">
                    <img src="<?php echo get_sub_field('work_item_image'); ?>" alt="create-img">
                  </div>
                </div>
              </div>
            </div>
        <?php $i++;
          endwhile;
        endif; ?>

      </div>
    </div>
  </section>
  <!-- smarter area end  -->

  <!-- Trusted_area section strat  -->
  <section class="Trusted_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="trusted">
            <div class="features-heading d-flex justify-content-center text-center  ">
              <div class="features_text trusted_box">
                <p class="section_btn"><?php the_field('testimonial_sub_title'); ?></p>
                <h2> <?php the_field('testimonial_heading'); ?></h2>
              </div>
            </div>
            <div class="trusted_text owl-carousel owl-theme " id="mycroues">

              <?php if (have_rows('testimonials')) : ?>
                <?php while (have_rows('testimonials')) : the_row(); ?>
                  <div class="masud justify-content-center d-flex">
                    <div class="trusted_text1 text-center ">
                      <span class="quote">“</span>
                      <p><?php echo get_sub_field('testimonial_quote'); ?></p>
                      <div class="trusted_img">
                        <img src="<?php echo get_sub_field('client_image'); ?>" loading="lazy" alt="James_Toriff">
                        <h3><?php echo get_sub_field('client_name'); ?></h3>
                        <p><?php echo get_sub_field('client_designation'); ?></p>
                        <?php

                        $review = get_sub_field('client_review');

                        if ($review == '1') {

                          echo
                          '<i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                          <i class="fa-regular fa-star"></i>';
                        } elseif ($review == '2') {
                          echo
                          '<i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                          <i class="fa-regular fa-star"></i>';
                        } elseif ($review == '3') {
                          echo '<i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>
                          <i class="fa-regular fa-star"></i>';
                        } elseif ($review == '4') {
                          echo '<i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star"></i>';
                        } elseif ($review == '5') {
                          echo '<i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>';
                        }; ?>

                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Trusted_area section end  -->

  <!-- simple_area section  strat -->
  <section class="simple_area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md12">
          <div class="simple_box">
            <p class="section_btn"><?php the_field('pricing_sub_title'); ?></p>
            <h2><?php the_field('pricing_heading'); ?></h2>
            <p><?php the_field('pricing_description'); ?></p>
            <h3><?php the_field('payment_method_heading'); ?></h3>
            <div class="simple_crade_img">
              <ul class="d-flex justify-content-between">

                <?php if (have_rows('payment_methods')) :; ?>
                  <?php while (have_rows('payment_methods')) : the_row(); ?>
                    <li><img src="<?php echo get_sub_field('method_image'); ?>" alt="simple_crade_img"></li>
                <?php endwhile;
                endif; ?>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="row">

            <?php
            $pricing_package = new WP_Query(array(
              'post_type' => 'pricing',
              'posts_per_page' => 2,
              'order' => 'ASC'
            ));
            while ($pricing_package->have_posts()) : $pricing_package->the_post();; ?>
              <div class="col-md-6">
                <div class="basic">
                  <div class="basic_heading d-flex justify-content-between align-items-center">
                    <h2><?php the_field('package_title'); ?></h2>
                    <p class="section_btn"><?php the_field('package_discount'); ?></p>
                  </div>
                  <div class="basic_month text-center">
                    <h2><?php the_field('package_price'); ?><span><?php the_field('package_duration'); ?></span></h2>
                    <a href="#" class="section_btn"><?php the_field('annual_billed'); ?></a>
                  </div>
                  <div class="basic_text text-center">
                    <ul>

                      <?php if (have_rows('package_items')) : ?>
                        <?php while (have_rows('package_items')) : the_row(); ?>
                          <li><?php echo get_sub_field('item'); ?></li>
                      <?php endwhile;
                      endif; ?>
                    </ul>
                    <a href="#" class="btn-1">Get Started</a>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata();?>


          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="trial_area">
    <div class="container">
      <div class="row trial_bg align-items-center">
        <div class="col-lg-6">
          <div class="trial_text">
            <h2><?php echo $options['trial_heading']; ?></h2>
            <p><?php echo $options['trial_description']; ?></p>
            <?php
            $trail_form = $options['form_shortcode'];
            if ($trail_form == '') :; ?>
              <div class="subsribe-form">
                <form action="#">
                  <input type="email" placeholder="your mail here...">
                  <input type="submit" class="btn-1" value="Get started">
                </form>
              </div>
            <?php else : ?>
              <?php echo do_shortcode($trail_form); ?>
            <?php endif; ?>
          </div>

        </div>
        <div class="col-lg-6">
          <img src="<?php echo $options['trail_image']['url']; ?>" loading="lazy" alt="trial-img">
        </div>

      </div>
    </div>
  </section>
  <!--  trial_area section end  -->

  <!-- Blog_area section strat  -->
  <section class="Blog_area section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center">
            <div class="features_text">
              <p class="section_btn">
                <?php $field = the_field('blog_sub_title');
                echo $field; ?>
              </p>
              <h2><?php the_field('blog_heading'); ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">

        <?php
        $blogs = new WP_Query(array(
          'post_type' => 'post',
          'post_per_page' => 2
        ));

        while ($blogs->have_posts()) : $blogs->the_post();

        ?>
          <div class="col-lg-6">
            <div class="blog_boxs">
              <div class="blog_box">
                <?php the_post_thumbnail(); ?>
                <div class="blog-button">
                  <?php
                  $categories = get_the_category();
                  foreach ($categories as $category) :; ?>
                    <a href="<?php echo get_category_link($category->term_id); ?>" class="btn-1"><?php echo $category->name; ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="blog_text">
                <p class="blog-p"><?php the_time('F d, Y'); ?></p>
                <h2><?php the_title(); ?></h2>
                <p><?php echo wp_trim_words(get_the_content(), 15, '... '); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>

      </div>
    </div>
  </section>
  <!-- Blog_area section end -->


</main>

<?php get_footer(); ?>
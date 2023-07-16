<?php $options = get_option('coderit'); ?>
<?php get_header(); ?>
<main>
  <!-- new & article section strat  -->
  <section class="article_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class=" article_heading">
            <div class="article_text">
              <h2><?php echo $options['blog-heading']; ?></h2>
              <p><?php echo $options['blog-description']; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">

        <?php while (have_posts()) : the_post(); ?>
          <div class="col-lg-6">
            <div class="blog_boxs article_crad">
              <div class="blog_box">
                <?php the_post_thumbnail(); ?>
                <div class="blog-button">
                  <?php

                  $categories = get_the_category();
                  foreach ($categories as $category) :
                  ?>

                    <a href="<?php echo get_category_link($category->term_id); ?>" class="btn-1"><?php echo $category->name; ?></a>

                  <?php endforeach; ?>
                </div>

              </div>
              <div class="blog_text">
                <p class="blog-p"><?php the_time('F d, Y'); ?></p>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo wp_trim_words(get_the_content(), 20, '...');  ?></p>
                <a href="">Read More</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>
  <!-- new & article section end  -->



  <!-- platform area strat -->

  <!-- platform area end -->
  <!-- smarter area strat  -->

  <!-- Trusted_area section end  -->

  <!-- simple_area section  strat -->

  <!-- simple_area section  strat -->

  <!--  trial_area section strat  -->

  <!--  trial_area section end  -->
  <!-- Blog_area section strat  -->



</main>
<?php get_footer(); ?>
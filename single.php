<?php get_header(); ?>
<main>
  <!--  marketion_area section strat  -->
  <section class="marketing_area  section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="marketing_head">
            <?php the_post_thumbnail(); ?>
            <div class="row marketing-padding">
              <div class="col-md-8">
                <div class="market_text1">
                  <h2><?php the_title(); ?></h2>
                </div>
              </div>
              <div class="col-md-4">
                <div class="market_seo">
                  <div class="market_seo_img">
                    <img src="<?php print get_avatar_url(get_the_author_meta('ID'), ['size' => '51']); ?>" alt="<?php the_author();  ?>">
                    <div class="seo_text">
                      <h4><?php the_author();  ?></h4>
                      <p><?php the_field('designation', 'user_' . get_the_author_meta('ID'));  ?></p>
                    </div>
                  </div>
                  <p><b>Post :</b><?php the_time('F d,Y'); ?></p>
                  <ul>
                    <?php
                    $categories = get_the_category();
                    // print_r($categories);
                    foreach ($categories as $categoroy) :
                    ?>
                      <li>
                        <a href="<?php echo get_category_link($categoroy->term_id); ?>" class="btn-2"><?php echo $categoroy->name; ?></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="marketing_discription">
            <div class="marketing_box">
              <div class="marketing_box1">
                <p class="p-text10">Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
                  massa quis enim.</p>
                <h2>How to choose the right app reseller program</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and <b>scrambled it to make</b> a type specimen book.</p>
                <p><b>01.</b> There are many variations of passages of Lorem Ipsum available.</p>
                <p><b>02.</b> Majority have suffered alteration in some form, by injected humour.</p>
                <p><b>03.</b> If you are going to use a passage of Lorem Ipsum.</p>
                <p><b>04.</b> It uses a dictionary of over 200 Latin words, combined with a handful</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

              </div>
              <div class="marketing_box2">
                <h3>Why a productivity app can change your work performance</h3>
                <p> you are going to use a passage of Lorem Ipsum, you need to be sure there isn't embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                <div class="marketing-images text-center">
                  <img src="assets/images/marketing/3.jpg" alt="">
                  <a href="#">Making this the first true generator on the Internet. </a>
                </div>
              </div>
              <div class="marketing_box3">
                <h2>Why a productivity app can change your work performance</h2>
                <p>you are going to use a passage of Lorem Ipsum, you need to be sure there isn't embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                <ul>
                  <li>
                    <p>You are going to use a passage of Lorem Ipsum, you need to be</p>
                  </li>
                  <li>
                    <p> Sure there isn't embarrassing hidden in the middle of text. All the</p>
                  </li>
                  <li>
                    <p>Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                  </li>
                  <li>
                    <p>Chunks as necessary, making this the first true generator </p>
                  </li>
                </ul>
              </div>

              <div class="marketing_box4">
                <div class="quet_text">
                  <h2>“</h2>
                </div>
                <div class="quet_text1">
                  <p>There are many variations of passages of Lorem Ipsum available but the majority have sufferg alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>

                </div>
              </div>
              <div class="marketing_box5">
                <h3>What is your favorite productivity Saas?</h3>
                <p>you are going to use a passage of Lorem Ipsum, you need to be sure there isn't embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- marketion_area section end  -->
  <section class="Latest_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="latest_box">
            <div class="latest-head">
              <h2>Latest Post</h2>
            </div>
            <div class="latest-head">
              <a href="<?php echo home_url() . '/blog'; ?>" class="btn-2">Browse All Post</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row latest-padding">

        <?php
        $recent_post = new WP_Query(array(
          'post_type' => 'post',
          'post_per_page' => '2'
        ));

        while ($recent_post->have_posts()) : $recent_post->the_post(); ?>
          <div class="col-lg-6">
            <div class="blog_boxs">
              <div class="blog_box">
                <?php the_post_thumbnail(); ?>
                <div class="blog-button">
                  <?php
                  $categories = get_the_category();
                  foreach ($categories as $categoroy) :
                  ?>

                    <a href="<?php echo get_category_link($categoroy->term_id); ?>" class="btn-1"><?php echo $categoroy->name; ?></a>

                  <?php endforeach; ?>
                </div>

              </div>
              <div class="blog_text">
                <p class="blog-p"><?php the_time('F d, Y'); ?></p>
                <h2><?php the_title(); ?></h2>
                <p><?php echo wp_trim_words(get_the_content(), 14, '...'); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>

  <section class="trial_area  ">
    <div class="container">
      <div class="row trial_bg align-items-center">
        <div class="col-lg-6">
          <div class="trial_text">
            <h2>Start your free trial today</h2>
            <p>It is a long established fact that a reader will be by the readable when looking at it layout. </p>
            <div class="subsribe-form">
              <form action="#">
                <input type="email" placeholder="your mail here...">
                <input type="submit" class="btn-1" value="Get strat">
              </form>
            </div>
          </div>

        </div>
        <div class="col-lg-6">
          <img src="assets/images/trial-img/trial-img.png" loading="lazy" alt="trial-img">
        </div>

      </div>
    </div>
  </section>

  <?php get_footer(); ?>
<?php
/*
Template Name: Pricing Template
*/
get_header(); ?>

<main>
  <section class="pricing_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center pricing_features">
            <div class="features_text">
              <h2><?php the_field('pricing_title'); ?></h2>
              <p><?php the_field('pricing_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <?php
        $pricing_package = new WP_Query(array(
          'post_type' => 'pricing',
          'post_per_page' => 3,
          'order' => 'ASC'
        ));
        while ($pricing_package->have_posts()) : $pricing_package->the_post();

        ?>
          <div class="col-md-4">
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
                  <?php
                  if (have_rows('package_items')) :
                    while (have_rows('package_items')) : the_row();; ?>
                      <li><?php echo get_sub_field('item'); ?></li>
                  <?php endwhile;
                  endif;
                  wp_reset_postdata(); ?>
                </ul>
                <a href="#" class="btn-1">Get Started</a>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>


  <section class="pricing-table section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="table-text text-center">
            <h2><?php the_field('compare_table_heading'); ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table33">
            <table>
              <tbody>
                <tr class="tby">
                  <?php
                  if (have_rows('cp_heading')) :
                    while (have_rows('cp_heading')) : the_row(); ?>

                      <th class="text-center">
                        <h3><?php the_sub_field('compare_pack_heading'); ?></h3>
                        <h4><?php the_sub_field('compare_pack_heading_subtitle'); ?></h4>
                      </th>

                  <?php endwhile;
                  endif;
                  wp_reset_postdata(); ?>

                </tr>
              </tbody>

              <?php
              if (have_rows('feature_items_group')) :
                while (have_rows('feature_items_group')) : the_row(); ?>
                  <tr>
                    <td class="clr bulu"><?php the_sub_field('group_name'); ?></td>
                    <td class="clr"> </td>
                    <td class="clr"> </td>
                    <td class="clr"> </td>
                  </tr>

                  <?php if (have_rows('group_items'))
                    while (have_rows('group_items')) : the_row(); ?>
                    <tr>
                      <td><?php the_sub_field('item'); ?></td>

                      <?php while (have_rows('items_status')) : the_row(); ?>
                        <?php if (get_sub_field('status') == 'Active') :
                        ?>
                          <td class="text-center chack"><i class="fa-regular fa-circle-check"></i> </td>
                        <?php elseif (get_sub_field('status') == 'Button') : ?>
                          <td class="clr text-center"><a href="<?php the_sub_field('button_url'); ?>" class="btn-22"><?php the_sub_field('button'); ?></a> </td>
                        <?php else : ?>
                          <td class="clr text-center"><i class="fa-regular fa-circle-xmark"></i> </td>
                      <?php endif;
                      endwhile; ?>

                    </tr>

              <?php endwhile;
                endwhile;
              endif; ?>
            </table>
          </div>
          <!-- On tables -->
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
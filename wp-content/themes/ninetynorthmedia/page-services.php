<?php
/**
 * Template Name: Services
 */
?>

<?php get_header(); ?>

<section data-id="services" id="content" role="main" class="services">

  <div class="pageSection services_intro">
    <h2 class="pageSection_title">Services</h2>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="services_introText">
            <p>
              By providing tailored solutions, supplying standard and state-of-the-art equipment, design &amp; engineering services,
              we have become a strategic supplier, business partner, and technical reference in the Philippine market for all major
              customers in the field of <span>Film</span>, <span>Broadcasting</span>, <span>Telecommunications</span>,
              <span>Government</span>, <span>Education</span>, <span>Medical</span>, <span>Industrial</span>, <span>Testing</span>,
              and <span>Security</span>.
            </p>
            <p>
              We successfully distribute and represent many of the renowned global brands. Our dynamic, experienced and highly
              professional <span>engineering and production team</span> provides application technical support, project management and design
              in solutions for their customers including start-ups.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pageSection services_categories">
    <div class="container">
      <div class="row">
        <?php
          $args = [
            'post_type' => 'service_categories',
            'posts_per_page' => -1
          ];

          $service_categories = new WP_Query($args);
        ?>
        <?php if($service_categories->have_posts()) : while($service_categories->have_posts()) : $service_categories->the_post(); ?>
          <div class="col-xs-12">
            <?php $serviceBg = wp_get_attachment_url( get_post_thumbnail_id()); ?>
            <div
              class="panel services_category"
              style="background-image: url(<?php echo $serviceBg; ?>)"
            >
              <div class="panel_content">
                <h2 class="panel_title">
                  <?php the_title(); ?>
                </h2>
                <div class="panel_desc">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="panel_append">
                <div class="row">
                  <?php
                    $inner_args = [
                      'post_type' => 'services_offered',
                      'posts_per_page' => -1,
                      'meta_query' => [[
                        'key' => 'category',
                        'value' => get_the_ID(),
                        'compare' => 'LIKE'
                      ]]
                    ];

                    $i = 1;
                    $services = new WP_Query($inner_args);
                  ?>
                  <?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post(); ?>
                    <div class="col-md-4 col-lg-3">
                      <div class="box wow fadeInUp services_entry">
                        <div class="box_info">
                          <?php the_title(); ?>
                        </div>
                      </div>
                    </div>

                    <?php if($i % 3 == 0) : ?>
                      <div class="clearfix hidden-sm-down hidden-lg-up"></div>
                    <?php endif; ?>

                    <?php if($i % 4 == 0) : ?>
                      <div class="clearfix hidden-md-down"></div>
                    <?php endif; ?>
                  <?php $i++; endwhile; endif; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
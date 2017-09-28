<?php
/**
 * Template Name: Products and Solutions
 */
?>

<?php get_header(); ?>

<section data-id="solutions" id="content" role="main" class="solutions">

  <div class="pageSection solutions_intro">
    <h2 class="pageSection_title">Products &amp; Solutions</h2>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="solutions_introText">
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

  <div class="pageSection solutions_categories">
    <div class="container">
      <div class="row">
        <?php
          $args = [
            'post_type' => 'solution_categories',
            'posts_per_page' => -1
          ];

          $solution_categories = new WP_Query($args);
        ?>
        <?php if($solution_categories->have_posts()) : while($solution_categories->have_posts()) : $solution_categories->the_post(); ?>
          <div class="col-xs-12">
            <div id="<?php echo get_post_field('post_name', get_post()); ?>"></div>
            <div class="panel solutions_category">
              <?php $solutionBg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
              <div
                class="panel_content"
                style="background-image: url(<?php echo $solutionBg[0]; ?>)"
              >
                <h2 class="panel_title">
                  <?php the_title(); ?>
                </h2>
                <div class="panel_desc">
                  <?php the_content(); ?>
                </div>
              </div>
              <?php
                $inner_args = [
                  'post_type' => 'solutions',
                  'posts_per_page' => -1,
                  'meta_query' => [[
                    'key' => 'category',
                    'value' => get_the_ID(),
                    'compare' => 'LIKE'
                  ]]
                ];

                $solutions = new WP_Query($inner_args);

                if($solutions->have_posts()) :
              ?>
                <div class="panel_append">
                  <div class="row">

                    <?php while($solutions->have_posts()) : $solutions->the_post(); ?>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <a href="<?php echo get_field('company_website'); ?>" target="_blank">
                          <div class="box wow fadeInUp solutions_entry">
                            <?php $companyLogo = get_field('company_logo'); ?>
                            <div
                              class="box_content"
                              style="background-image: url(<?php echo $companyLogo['sizes']['medium']; ?>)">
                            </div>
                            <div class="box_info">
                              <div class="box_title"><?php the_title(); ?></div>
                              <div id="box1" class="box_desc"><?php echo get_field('description'); ?></div>
                              <?php $parts = parse_url(get_field('company_website')); ?>
                              <div class="box_link"><?php echo $parts['host']; ?></div>
                            </div>
                          </div>
                        </a>
                      </div>
                    <?php endwhile; ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
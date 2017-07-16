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
              We are a company engaged in <span>TV Production</span>, <span>Film</span>, <span>Rentals</span>,
              <span>Distributorships / Representatives</span> and <span>System Integration</span>.
              With Partners and Principals across the USA, Europe and Asia Pacific.
            </p>
            <p>
              By providing tailored solutions, supplying standard and state-of-the-art equipment, design &amp; engineering services,
              we have become a strategic supplier, business partner, and technical reference in the Philippine market for all major
              customers in the field of <span>Film</span>, <span>Broadcasting</span>, <span>Telecommunications</span>,
              <span>Government</span>, <span>Education</span>, <span>Medical</span>, <span>Industrial</span>, <span>Testing</span>,
              and <span>Security</span>.
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
            <div class="panel solutions_category">
              <?php $solutionBg = wp_get_attachment_url( get_post_thumbnail_id()); ?>
              <div
                class="panel_content"
                style="background-image: url(<?php echo $solutionBg; ?>)"
              >
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
                      'post_type' => 'solutions',
                      'posts_per_page' => -1,
                      'meta_query' => [[
                        'key' => 'category',
                        'value' => get_the_ID(),
                        'compare' => 'LIKE'
                      ]]
                    ];

                    $solutions = new WP_Query($inner_args);
                  ?>
                  <?php if($solutions->have_posts()) : while($solutions->have_posts()) : $solutions->the_post(); ?>
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
                  <?php endwhile; endif; ?>
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
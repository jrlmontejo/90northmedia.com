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

  <div class="pageSection solutions_entries">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="panel solutions_entry solutions_entry-broadcasting">
            <div class="panel_content">
              <h2 class="panel_title">Broadcasting</h2>
              <div class="panel_desc">
                <p>
                  We are a company engaged in <span>TV Production</span>, <span>Film</span>, <span>Rentals</span>,
                  <span>Distributorships / Representatives</span> and <span>System Integration</span>.
                  With Partners and Principals across the USA, Europe and Asia Pacific.
                </p>
              </div>
            </div>
            <div class="panel_append">
              <div class="row">
                <?php
                  $args = [
                    'post_type' => 'solutions',
                    'numberposts' => -1,
                    'meta_query' => [[
                      'key' => 'type',
                      'value' => 'broadcasting',
                      'compare' => 'LIKE'
                    ]]
                  ];

                  $solutions = new WP_Query($args);

                ?>
                <?php if($solutions->have_posts()) : while($solutions->have_posts()) : $solutions->the_post(); ?>
                  <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="<?php echo get_field('company_website'); ?>" target="_blank">
                      <div class="box wow fadeInUp">
                        <?php $companyLogo = get_field('company_logo'); ?>
                        <div
                          class="box_content"
                          style="background-image: url(<?php echo $companyLogo['sizes']['medium']; ?>)">
                        </div>
                        <div class="box_info">
                          <div class="box_title"><?php the_title(); ?></div>
                          <div class="box_desc">
                            <div><?php echo get_field('description'); ?></div>
                            <?php $parts = parse_url(get_field('company_website')); ?>
                            <div class="box_link"><?php echo $parts['host']; ?></div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php
                    endwhile;
                  endif;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="panel solutions_entry solutions_entry-it">
            <div class="panel_content">
              <h2 class="panel_title">IT &amp; Networking</h2>
              <div class="panel_desc">
                <p>
                  We successfully distribute and represent many of the renowned global brands. Our dynamic, experienced and highly
                  professional <span>engineering and production team</span> provides application technical support, project management and design
                  in solutions for their customers including start-ups.
                </p>
              </div>
            </div>
            <div class="panel_append">
              <div class="row">
                <?php
                  $args = [
                    'post_type' => 'solutions',
                    'numberposts' => -1,
                    'meta_query' => [[
                      'key' => 'type',
                      'value' => 'it',
                      'compare' => 'LIKE'
                    ]]
                  ];

                  $solutions = new WP_Query($args);
                ?>
                <?php if($solutions->have_posts()) : while($solutions->have_posts()) : $solutions->the_post(); ?>
                  <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="<?php echo get_field('company_website'); ?>" target="_blank">
                      <div class="box wow fadeInUp">
                        <?php $companyLogo = get_field('company_logo'); ?>
                        <div
                          class="box_content"
                          style="background-image: url(<?php echo $companyLogo['sizes']['medium']; ?>)">
                        </div>
                        <div class="box_info">
                          <div class="box_title"><?php the_title(); ?></div>
                          <div class="box_desc">
                            <div><?php echo get_field('description'); ?></div>
                            <?php $parts = parse_url(get_field('company_website')); ?>
                            <div class="box_link"><?php echo $parts['host']; ?></div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php
                    endwhile;
                  endif;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
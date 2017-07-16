<?php get_header(); ?>

<section data-id="single" id="content" role="main" class="single">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div
                class="single_featuredImage focuspoint"
                data-focus-x="0"
                data-focus-y="0"
              >
                <?php the_post_thumbnail('post-thumbnail'); ?>
              </div>
            <?php endif; ?>
            <header>
              <h1 class="single_title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                  <?php the_title(); ?>
                </a>
              </h1>
              <?php if ( !is_search() ) : ?>
                <section class="single_meta">
                  <span class="single_date">
                    <?php the_time( get_option( 'date_format' ) ); ?>
                  </span>
                </section>
              <?php endif; ?>
            </header>
            <section class="single_content">
              <?php if (is_archive() || is_search()) : ?>
                <?php the_excerpt(); ?>
              <?php else : ?>
                <?php the_content(); ?>
              <?php endif; ?>

              <div class="single_links"><?php wp_link_pages(); ?></div>
            </section>
          </article>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
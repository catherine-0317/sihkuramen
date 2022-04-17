<?php get_header(); ?>

  <main>
    <section id="news" class="news">
     <h3>NEWS</h3>
      <?php if ( have_posts() ) : ?>
        <div class="news-list" id="post-<?php the_ID(); ?>"<?php post_class('news'); ?>>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="wp_item_big_box">
          <div class="item" >
            <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
            <?php the_category(); ?>
          </div>
            <div class="wp_title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="c_concept_content"><?php the_content(); ?></div>
        </div>
       <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </section>
  </main>

  <?php get_footer(); ?>
<?php get_header(); ?>

<main> 
  <section class="news_index">
    <img class="news_img1" src="<?php echo get_template_directory_uri(); ?>/img/p19.jpg" alt="ニュース">
    <img class="news_img2" src="<?php echo get_template_directory_uri(); ?>/img/p23.jpg" alt="ニュース">
      <h3>NEWS</h3>
    <?php if ( have_posts() ) : ?>
      <div class="news-list_index" id="post-<?php the_ID(); ?>"<?php post_class('news'); ?>>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="item_big_box">
        <div class="item" >
          <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
          <?php the_category(); ?>
       </div>
       <a href="<?php the_permalink(); ?>"><div class="title"><?php the_title(); ?></div>
       </a>
      </div>
     <?php endwhile; ?>
    </div>
     <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>

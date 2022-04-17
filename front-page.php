<?php get_header(); ?>

<main class="main">
  <section id="top" class="top">
    <div class="top_box">
      <div> <img class="top_img" src="<?php echo get_template_directory_uri(); ?>/img/p28.jpg" alt="洋服"></div>
      <div class="wave">
        <h2>ON° Is<br>
          A Fashion<br>
          LifeStyle</h2>
        <div class="scrolldown"><small>Scroll</small> <span></span></div>
      </div>
    </div>
  </section>
  <section id="concept" class="concept">
    <div class="concept_box">
      <div>
        <h3>CONCEPT</h3>
        <img class="fade" src="<?php echo get_template_directory_uri(); ?>/img/OND_p2.jpg" alt="オンド"></div>
        <div class="concept_txt">
        <p class="concept_lead">″ ON° ″<br>
          ″ おんど″<br>
          「寒い、涼しい、暖かい、暑い」<br>
          温度は、私たちの生活に密接に関係している。<br>
          気候の温度だけではなく<br>
          感情にも温度がある。<br>
          「喜び、悲しみ、怒り、楽しみ」<br>
          様々な感情を持って生きている。<br>
          人々のさまざまな″温度″に寄り添う今着たいお洋服を温かいON°で届けたい。</p>
        <a href="<?php echo home_url(); ?>/concept" class="btnarrow4">More</a></div>
    </div>
  </section>
  <section id="item" class="item1">
    <h3>ITEM</h3>
    <div class="item01">
      <div class="item01_one">
        <div class="item01_one_ph">
          <h4>Wom<span>an</span><br>
            Fashi<span>on</span></h4>
          <img class="item_img1" src="<?php echo get_template_directory_uri(); ?>/img/item02_01.jpg" alt="女性服"></div>
          <p class="item01_txt">”人々のさまざまな”温度”に寄り添う今着たいお洋服を温かいON°で届けたい”<br>
          というブランドコンセプトをもとにひと癖くわえた個性的なデザインのお洋服を取り扱っているセレクトショップです。<br>
          普段のファッションにワンランク上のアイテムを。</p>
          <div class="item01_link"><a href="https://ondo--official.stores.jp/" target="_blank" rel="noopener" class="btnarrow4">On Line Shop</a></div>
        </div>
     <div class="item01_two"><img class="item_img2" src="<?php echo get_template_directory_uri(); ?>/img/item02_02.jpg" alt="女性服"></div>
    </div>
  </section>
  <section class="item2">
    <div class="item02">
      <div class="item02_one">
        <div class="item02_one_ph">
          <h4>Kids<br>
            Fashi<span>on</span></h4>
          <img class="item_img3" src="<?php echo get_template_directory_uri(); ?>/img/KID_FASHON.jpg" alt="子どものお洋服"></div>
        <div>
         <p class="item02_txt">大人と同じファッションを子どもたちにも届けたい。という想いから、大人のデザインを小さくして、子どもにも個性的なファッションを届けたい。</p>
         <div class="item02_link"><a href="https://ondo--official.stores.jp/" target="_blank" rel="noopener" class="btnarrow4">On Line Shop</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="look">
    <div id="move" class="move">
      <h3>LOOK</h3>
      <video src="<?php echo get_template_directory_uri(); ?>/move/LOOK.mp4" loop autoplay muted></video>
      <div class="move_row"><a href="https://ondo--official.stores.jp/" target="_blank" rel="noopener" class="btnarrow4_move">On Line Shop</a></div>
    </div>
  </section>
  <section id="news" class="news">
    <h3>NEWS</h3>
    <?php if ( have_posts() ) : ?>
    <div class="news-list" id="post-<?php the_ID(); ?>"<?php post_class('news'); ?>>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="item_big_box">
      <div class="item" >
        <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
        <?php the_category(); ?>
        </div>
        <div class="title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></div>
        </div>
    <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </section>
  <section id="access" class="access">
    <div>
      <h3>ACCESS</h3>
      <p> 〒811-1302<br>
        福岡県福岡市南区井尻4-2-49 2F<br>
        Tel 090-9607-1833</p>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.096789384404!2d130.44111821515799!3d33.55086148074529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354190efb7f5bbcd%3A0xf510691b1a69b97!2z44CSODExLTEzMDIg56aP5bKh55yM56aP5bKh5biC5Y2X5Yy65LqV5bC777yU5LiB55uu77yS4oiS77yU77yZ!5e0!3m2!1sja!2sjp!4v1643512466805!5m2!1sja!2sjp" ></iframe>
  </section>
  <section id="director" class="director">
    <h3>DIRECTOR</h3>
    <div class="director_box"> <img src="<?php echo get_template_directory_uri(); ?>/img/p27.jpg" alt="ディレクター">
      <p>buyer/director/accsessory/designer</p>
    </div>
  </section>
</main>

<?php get_footer(); ?>
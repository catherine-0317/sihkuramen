<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name = "viewport" content = "width = device-width, initial-scale=1, user-scalable=yes">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/resets.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/concept.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Italiana&family=Shippori+Mincho:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header" class="header">
  <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_black.png" alt="ロゴ"></a></h1>
  <div class="nav">
    <input id="drawer_input" class="drawer_hidden" type="checkbox">
    <label for="drawer_input" class="drawer_open"><span></span></label>
    <label for="drawer_input" class="drawer_close"></label>
    <nav  id="nav1" class="nav_content">
      <div for="nav_input" class="nav_close"></div>
      <ul class="nav_list">
        <li class="nav_item"><a href="#concept" >CONCEPT</a></li>
        <li class="nav_item"><a href="#item">ITEM</a></li>
        <li class="nav_item"><a href="#news">NEWS</a></li>
        <li class="nav_item"><a href="#access">ACCESS</a></li>
        <li class="nav_item"><a href="#director">DIRECTOR</a></li>
        <li class="nav_item"><a href="https://www.instagram.com/_ondo.official/" target="_blank" rel="noopener" ><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="インスタグラム"></a></li>
      </ul>
    </nav>
  </div>
</header>
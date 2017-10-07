<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/responsive.css" type="text/css" media="screen, print" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, print" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() );?>/jquery/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1');
?>
<?php wp_head(); ?>
<script type="text/javascript">
$(document).ready(function(){
   $(document).ready(
      function(){
      $(".single a img").hover(function(){
      $(this).fadeTo(200, 0.8);
      },function(){
      $(this).fadeTo(300, 1.0);
      });
   });
   $(".menu-toggle").toggle(
      function(){
      $(this).attr('src', '<?php echo esc_url( get_template_directory_uri() );?>/images/toggle-off.png');
      $("#nav").slideToggle();
      return false;
      },
      function(){
      $(this).attr('src', '<?php echo esc_url( get_template_directory_uri() );?>/images/toggle-on.gif');
      $("#nav").slideToggle();
      return false;
      }
   );
});
</script>
</head>

<body <?php body_class(); ?>>

<div class="toggle">
<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/toggle-on.gif" alt="toggle" class="menu-toggle" /></a>
</div>

<!-- ヘッダーテキスト -->
<div class="header-text mobile-display-none">
<div class="header-text-inner"><?php bloginfo('description'); ?></div>
</div>
<!-- / ヘッダーテキスト -->

<!-- ヘッダー -->
<header id="header">

<!-- ヘッダー中身 -->
<div class="header-inner">

<!-- ロゴ -->
<?php if ( is_home() || is_front_page() ) : ?>
<!-- トップページだけ -->
<h1 class="logo">
<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() .'/images/logo.gif' ?>" alt="<?php bloginfo('name'); ?>" /></a>
</h1>
<?php else : ?>
<!-- トップページ以外 -->
<div class="logo">
<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() .'/images/logo.gif' ?>" alt="<?php bloginfo('name'); ?>" /></a>
</div>
<?php endif; ?>
<!-- / ロゴ -->

<!-- お問い合わせ -->
<div class="contact">
<a href="<?php echo (get_option('toptext3'));?>">
<div class="contact-tel"><?php echo (get_option('toptext'));?></div>

<div class="contact-address"><?php echo (get_option('toptext2'));?></div>
</a>
</div>
<!-- / お問い合わせ -->

</div>
<!-- / ヘッダー中身 -->

</header>
<!-- / ヘッダー -->
<div class="clear"></div>

<!-- トップナビゲーション -->
<nav id="nav" class="main-navigation" role="navigation">
<div class="nav-inner ">
<?php wp_nav_menu( array( 'menu' => 'topnav', 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
</div>
</nav>
<!-- / トップナビゲーション -->
<div class="clear"></div>


<!-- トップページヘッダー画像 -->
<?php if ( is_home() || is_front_page() ) : ?>
<!-- トップページだけ -->
<div id="top-slide-max" class="cycle-slideshow">
<img src="<?php echo (get_option('slideshow1')) ? get_option('slideshow1') : get_template_directory_uri() . '/images/main_01.jpg' ?>" alt="<?php bloginfo('name'); ?>" class="first" />
</div>
<?php else : ?>
<!-- トップページ以外 -->
<?php endif; ?>
<!-- / トップページヘッダー画像 -->

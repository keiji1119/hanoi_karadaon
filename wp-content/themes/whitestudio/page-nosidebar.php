<?php
/*
Template Name: サイドバー無しワンカラム
*/
?>

<?php get_header(); ?>


<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 class="pagetitle"><?php the_title(); ?></h1>

<div class="page-contents">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>

<?php endwhile; else: ?>
<p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
<?php endif; ?>

</div>
<!-- / メインwrap -->

<?php get_footer(); ?>
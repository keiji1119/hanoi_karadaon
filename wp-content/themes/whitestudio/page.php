<?php get_header(); ?>


<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<!-- コンテンツブロック -->
<div class="row">

<!-- 本文エリア -->
<!-- <div class="twothird"> -->

<h1 class="pagetitle"><?php the_title(); ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="page-contents">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>

<?php endwhile; else: ?>
<p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
<?php endif; ?>

<!-- </div> -->
<!-- / 本文エリア -->


<!-- サイドエリア -->
<div class="third">

<?php get_sidebar(); ?>

</div>
<!-- / サイドエリア -->


</div>
<!-- / コンテンツブロック -->


</div>
<!-- / メインwrap -->

<?php get_footer(); ?>
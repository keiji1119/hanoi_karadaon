<?php get_header(); ?>

<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<!-- コンテンツブロック -->
<div class="row">

<!-- 本文エリア -->
<div class="twothird">

<!-- ポスト -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- 投稿ループ -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- パンくずリスト -->
<div class="breadcrumb">
<div itemscope itemtype="//data-vocabulary.org/Breadcrumb">
<a href="<?php echo home_url(); ?>" itemprop="url">
<span itemprop="title">Home</span> </a> &rsaquo;</div>
<?php $postcat = get_the_category(); ?>
<?php $catid = $postcat[0]->cat_ID; ?>
<?php $allcats = array($catid); ?>
<?php 
while(!$catid==0) {
$mycat = get_category($catid);
$catid = $mycat->parent;
array_push($allcats, $catid);
}
array_pop($allcats);
$allcats = array_reverse($allcats);
?>
<?php foreach($allcats as $catid): ?>
<div itemscope itemtype="//data-vocabulary.org/Breadcrumb">
<a href="<?php echo get_category_link($catid); ?>" itemprop="url">
<span itemprop="title"><?php echo get_cat_name($catid); ?></span></a> &rsaquo;</div>
<?php endforeach; ?>
<div itemscope itemtype="//data-vocabulary.org/Breadcrumb">
<span itemprop="title"><a href="<?php echo the_permalink(); ?>" itemprop="url"><?php the_title(); ?></a></span></div>
</div>
<!-- / パンくずリスト -->


<div class="pagedate"><?php the_time(__('Y-m-d', 'minimalwp')) ?></div>
<h1 class="blog-title"><?php the_title(); ?></h1>

<div class="single-contents">
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>

<!-- 投稿が無い場合 -->
<?php endwhile; else: ?>
<p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
<?php endif; ?>
<!-- 投稿が無い場合 -->
<!-- / 投稿ループ -->


<!-- ウィジェットエリア（シングルページ記事下） -->
<div class="row">
<div class="singlebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('シングルページ記事下') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（シングルページ記事下） -->

<!-- タグ -->
<div class="blog-foot"><?php the_tags(); ?></div>
<!-- / タグ -->

<!-- 関連記事 -->
<div class="similar-head">関連記事</div>
<div class="similar">
<?php
//カテゴリ情報から関連記事をランダムに呼び出す
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
  'post__not_in' => array($post -> ID),
  'posts_per_page'=> 5,
  'category__in' => $category_ID,
  'orderby' => 'rand',
);
$query = new WP_Query($args); ?>
<ul>
  <?php if( $query -> have_posts() ): ?>
  <?php while ($query -> have_posts()) : $query -> the_post(); ?>
<li><table class="similar-text"><tr><th><a href="<?php the_permalink(); ?>"><?php
if ( has_post_thumbnail() ) the_post_thumbnail(array(420,280));
else echo '<img src="'.get_template_directory_uri().'/images/noimage-420x280.gif" />';
?></a></th>
<td><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></td></tr></table></li>
<?php endwhile;?>
<?php else:?>
<p>関連記事はありません</p>
<?php
endif;
wp_reset_postdata();
?>
</ul>
</div>
<!-- / 関連記事 -->


<!-- ページャー -->
<div id="next">
<ul class="block-two">
<li class="next-left"><?php previous_post_link('%link', '%title', 'true'); ?></li>
<li class="next-right"><?php next_post_link('%link', '%title', 'true'); ?></li>
</ul>
</div>
<!-- / ページャー -->


<!-- コメントエリア -->
<?php comments_template(); ?>
<!-- / コメントエリア -->



<!-- ウィジェットエリア（シングルページ最下部） -->
<div class="row">
<div class="singlebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('シングルページ最下部') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（シングルページ最下部） -->

</article>
<!-- / ポスト -->

</div>
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
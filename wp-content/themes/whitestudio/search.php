<?php get_header(); ?>

<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<h1 class="pagetitle">検索結果：<?php the_search_query(); ?></h1>

<!-- コンテンツブロック -->
<div class="row">


<!-- 本文エリア -->
<div class="twothird">

<!-- 検索結果の表示 -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="margin-bottom50"><?php the_excerpt(); ?></div>

<?php endwhile; ?>
<!-- /検索結果の表示 -->

<!-- キーワードが見つからないとき -->
<?php else: ?> 
<p>お探しのキーワードは見つかりませんでした。</p>
<?php endif; ?>
<!-- / キーワードが見つからないとき -->


<div class="clear margin-bottom100"></div>
<!-- ページャー -->
<div class="pager">
<?php global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
	$paginate_format = '';
	$paginate_base = add_query_arg('paged','%#%');
}
else{
	$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
	user_trailingslashit('page/%#%/','paged');;
	$paginate_base .= '%_%';
}
echo paginate_links(array(
	'base' => $paginate_base,
	'format' => $paginate_format,
	'total' => $wp_query->max_num_pages,
	'mid_size' => 1,
	'current' => ($paged ? $paged : 1),
	'prev_text' => '«',
	'next_text' => '»',
)); ?>
</div>
<!-- / ページャー -->

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
</div>
<!-- / 全体wrapper -->

<!-- フッターエリア -->
<footer id="footer">

<!-- フッターコンテンツ -->
<div class="footer-inner">

<!-- ウィジェットエリア（フッター３列枠） -->
<div class="row">
<article class="third">
<div class="footerbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('フッター３列枠（左）') ) : ?>
<?php endif; ?>
</div>
</article>
<article class="third">
<div class="footerbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('フッター３列枠（中央）') ) : ?>
<?php endif; ?>
</div>
</article>
<article class="third">
<div class="footerbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('フッター３列枠（右）') ) : ?>
<?php endif; ?>
</div>
</article>
</div>
<!-- / ウィジェットエリア（フッター３列枠） -->
<div class="clear"></div>


</div>
<!-- / フッターコンテンツ -->

<!-- コピーライト表示 -->
<div id="copyright">
© <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>. / <a href="//minimalwp.com" target="_blank" rel="nofollow">WP Theme by Minimal WP</a>
</div>
<!-- /コピーライト表示 -->

</footer>
<!-- / フッターエリア -->

<?php wp_footer(); ?>

<!-- Js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() );?>/jquery/scrolltopcontrol.js"></script>
<!-- /Js -->

<!-- doubleTapToGo Js -->
<script src="<?php echo esc_url( get_template_directory_uri() );?>/jquery/doubletaptogo.js" type="text/javascript"></script>
<script>
$( function()
 {
 $( '#nav li:has(ul)' ).doubleTapToGo();
 });
</script>
<!-- / doubleTapToGo Js -->

</body>
</html>
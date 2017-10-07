<?php get_header('top'); ?>

<!-- 全体warapper -->
<div class="wrapper">

<!-- メインwrap -->
<div id="main">

<!-- コンテンツブロック -->
<div class="row">

<!-- ウィジェットエリア（トップページ上部（大）） -->
<div class="row">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ上部（大）') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（トップページ上部（大）） -->

<!-- ウィジェットエリア（トップページ上部２列枠） -->
<div class="row">
<div class="half">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ上部２列枠（左）') ) : ?>
<?php endif; ?>
</div>
</div>
<div class="half">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ上部２列枠（右）') ) : ?>
<?php endif; ?>
</div>
</div>
</div>
<!-- / ウィジェットエリア（トップページ上部２列枠） -->

<!-- ウィジェットエリア（トップページ上部３列枠） -->
<div class="row">
<div class="third">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ上部３列枠（左）') ) : ?>
<?php endif; ?>
</div>
</div>
<div class="third">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ上部３列枠（中央）') ) : ?>
<?php endif; ?>
</div>
</div>
<div class="third">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ上部３列枠（右）') ) : ?>
<?php endif; ?>
</div>
</div>
</div>
<!-- / ウィジェットエリア（トップページ上部３列枠） -->




<!-- ウィジェットエリア（トップページ最下部（大）） -->
<div class="row">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ最下部（大）') ) : ?>
<?php endif; ?>
</div>
</div>
<!-- / ウィジェットエリア（トップページ最下部（大）） -->

<!-- ウィジェットエリア（トップページ最下部２列枠） -->
<div class="row">
<div class="half">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ最下部２列枠（左）') ) : ?>
<?php endif; ?>
</div>
</div>
<div class="half">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ最下部２列枠（右）') ) : ?>
<?php endif; ?>
</div>
</div>
</div>
<!-- / ウィジェットエリア（トップページ最下部２列枠） -->

<!-- ウィジェットエリア（トップページ最下部３列枠） -->
<div class="row">
<div class="third">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ最下部３列枠（左）') ) : ?>
<?php endif; ?>
</div>
</div>
<div class="third">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ最下部３列枠（中央）') ) : ?>
<?php endif; ?>
</div>
</div>
<div class="third">
<div class="topbox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('トップページ最下部３列枠（右）') ) : ?>
<?php endif; ?>
</div>
</div>
</div>
<!-- / ウィジェットエリア（トップページ最下部３列枠） -->

</div>
<!-- / コンテンツブロック -->


</div>
<!-- / メインwrap -->


<?php get_footer(); ?>
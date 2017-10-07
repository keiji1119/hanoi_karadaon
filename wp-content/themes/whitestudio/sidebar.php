<!-- サイドバー -->
<div class="sidebar">

<!-- ウィジェットエリア（サイドバー新着記事の上） -->
<div class="sidebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('サイドバー新着記事の上') ) : ?>
<?php endif; ?>
</div>
<!-- /ウィジェットエリア（サイドバー新着記事の上） -->

<!-- ウィジェットエリア（サイドバー新着記事の下） -->
<div class="sidebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('サイドバー新着記事の下') ) : ?>
<?php endif; ?>
</div>
<!-- /ウィジェットエリア（サイドバー新着記事の下） -->

<!-- ウィジェットエリア（サイドバー最下部 PC・スマホ切り替え） -->
<?php if (wp_is_mobile()) :?>
<!-- スマホ表示エリア -->
<div class="sidebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('サイドバー最下部（モバイル専用）') ) : ?>
<?php endif; ?>
</div>
<!-- / スマホ表示エリア -->
<?php else: ?>
<!-- パソコン表示エリア -->
<div class="sidebox">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('サイドバー最下部（PC専用）') ) : ?>
<?php endif; ?>
</div>
<!-- / パソコン表示エリア -->
<?php endif; ?>
<!-- / ウィジェットエリア（サイドバー最下部 PC・スマホ切り替え） -->

</div>
<!-- /  サイドバー  -->
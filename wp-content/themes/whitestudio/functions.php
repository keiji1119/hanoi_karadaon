<?php

/* ************************************************ 
*	コンテンツ幅
* ************************************************ */

if ( ! isset( $content_width ) ) {
	$content_width = 960;
}


/* ************************************************ 
*	ヘッダータグの消去
* ************************************************ */

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra',3,0);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'rel_canonical');


/* ************************************************ 
*	セルフピンバック禁止
* ************************************************ */

function no_self_ping( &$links ) {
$home = home_url();
foreach ( $links as $l => $link )
if ( 0 === strpos( $link, $home ) )
unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );


/* ************************************************ 
*	タイトル表示
* ************************************************ */

add_theme_support( 'title-tag' );


/* ************************************************ 
*	カスタムメニュー
* ************************************************ */

register_nav_menus(array('primary' => 'グローバルメニュー'));


/* ************************************************ 
*	カスタム背景
* ************************************************ */

add_theme_support( 'custom-background' );


/* ************************************************ 
*	アイキャッチ画像
* ************************************************ */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 420, 280, true );
add_image_size('img-head',2000,1000);


/* ************************************************ 
*	テキストウィジェットでショートコードを使用
* ************************************************ */

add_filter('widget_text', 'do_shortcode' );


/* ************************************************ 
*	カテゴリー説明文でHTMLタグを使用
* ************************************************ */

remove_filter('pre_term_description', 'wp_filter_kses');


/* ************************************************ 
*	ウィジェット
* ************************************************ */

add_action( 'widgets_init', 'minimal_wp_widgets_init' );
function minimal_wp_widgets_init() {
register_sidebar(array(
'name'=>'サイドバー新着記事の上',
'id'  => 'sidebar-1',
'description'   => 'PC表示時：横幅300px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'サイドバー新着記事の下',
'id'  => 'sidebar-2',
'description'   => 'PC表示時：PC横幅300px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'サイドバー最下部（PC専用）',
'id'  => 'sidebar-3',
'description'   => 'PC表示時：横幅300px：PCのみ表示されます',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'サイドバー最下部（モバイル専用）',
'id'  => 'sidebar-4',
'description'   => 'スマホ・タブレットのみ表示されます',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'シングルページ記事下',
'id'  => 'sidebar-5',
'description'   => 'PC表示時：横幅630px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="single-widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'シングルページ最下部',
'id'  => 'sidebar-6',
'description'   => 'PC表示時：横幅630px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="single-widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'フッター３列枠（左）',
'id'  => 'sidebar-7',
'description'   => 'PC表示時：横幅300px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="footer-widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'フッター３列枠（中央）',
'id'  => 'sidebar-8',
'description'   => 'PC表示時：横幅300px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="footer-widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'フッター３列枠（右）',
'id'  => 'sidebar-9',
'description'   => 'PC表示時：横幅300px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="footer-widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ上部（大）',
'id'  => 'sidebar-10',
'description'   => 'PC表示時：横幅630px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ上部２列枠（左）',
'id'  => 'sidebar-11',
'description'   => 'PC表示時：横幅305px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ上部２列枠（右）',
'id'  => 'sidebar-12',
'description'   => 'PC表示時：横幅305px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ上部３列枠（左）',
'id'  => 'sidebar-13',
'description'   => 'PC表示時：横幅197px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ上部３列枠（中央）',
'id'  => 'sidebar-14',
'description'   => 'PC表示時：横幅197px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ上部３列枠（右）',
'id'  => 'sidebar-15',
'description'   => 'PC表示時：横幅197px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ最下部（大）',
'id'  => 'sidebar-16',
'description'   => 'PC表示時：横幅630px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ最下部２列枠（左）',
'id'  => 'sidebar-17',
'description'   => 'PC表示時：横幅305px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ最下部２列枠（右）',
'id'  => 'sidebar-18',
'description'   => 'PC表示時：横幅305px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ最下部３列枠（左）',
'id'  => 'sidebar-19',
'description'   => 'PC表示時：横幅197px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ最下部３列枠（中央）',
'id'  => 'sidebar-20',
'description'   => 'PC表示時：横幅197px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name'=>'トップページ最下部３列枠（右）',
'id'  => 'sidebar-21',
'description'   => 'PC表示時：横幅197px',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
}

/* ************************************************ 
*	フィードリンク
* ************************************************ */

add_theme_support( 'automatic-feed-links' );


/* ************************************************ 
*	#more-$id を削除
* ************************************************ */

function custom_content_more_link( $output ) {
$output = preg_replace('/#more-[\d]+/i', '', $output );
return $output;
}
add_filter( 'the_content_more_link', 'custom_content_more_link' );


/* ************************************************ 
*	シングルページテンプレート設定
* ************************************************ */

add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(get_template_directory() . "/single-{$cat->term_id}.php") ) return get_template_directory() . "/single-{$cat->term_id}.php"; } return $t;' ));


/* ************************************************ 
*	エディタ拡張
* ************************************************ */

/*** テキストエディタにボタンを追加 ***/
function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript">
    QTags.addButton( 'youtube', 'YouTube', '<div class="youtube">', '</div>', '', 'YouTube tag', 201 );
    QTags.addButton( 'h1', 'H1', '<h1 class="blog-title">', '</h1>', '', 'h1 tag', 202 );
    QTags.addButton( 'h2', 'H2', '<h2>', '</h2>', '', 'h2 tag', 203 );
    QTags.addButton( 'h3', 'H3', '<h3>', '</h3>', '', 'h3 tag', 204 );
    QTags.addButton( 'h4', 'H4', '<h4>', '</h4>', '', 'h4 tag', 205 );
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );


/*** ヴィジュアルエディタにボタンを追加 ***/
function ilc_mce_buttons($buttons){
array_push($buttons, "backcolor", "copy", "cut", "paste", "fontsizeselect", "cleanup");
return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");


/*** ビジュアルエディターにスタイルを適用する ***/
add_editor_style();


/* ************************************************ 
*	Minimal WPカスタムの設定
* ************************************************ */

function options_admin_menu() {
add_theme_page("Minimal WPテーマ設定", "Minimal WPカスタム", 'edit_themes', basename(__FILE__), 'options_page');
}
add_action('admin_menu', 'options_admin_menu');

function options_page() {
if ( $_POST['update_options'] == 'true' ) { options_update(); }
?>


<div class="wrap">

<h2>ロゴ画像の変更</h2>
<p>ロゴ画像をアップロードして、画像ファイルのURLを指定すると、サイトのロゴが変更されます。</p>
<form method="post" action="">
<input type="hidden" name="update_options" value="true" />
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="logo_url"><?php _e('◎ロゴ画像のURL', 'minimalwp'); ?></label></th>
<td><input type="text" name="logo_url" id="logo_url" size="50" value="<?php echo get_option('logo_url'); ?>"/>　（例：http://example.com/uploads/xxxxxx.gif）<br/>
<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/media-new.php" target="_blank">ロゴ画像をアップロード</a><br />
＊推奨ファイル：gif、jpg、png<br />
<br />
＜変更方法＞<br />
1 - WordPressの<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/upload.php" target="_blank">メディアライブラリー（メディア＞新規追加）</a>に画像をアップロード<br />
2 - 画像ファイルの「URL」をコピー<br />
3 - 上のボックスに画像ファイルのURLをペースト<br />
4 - ページ一番下の「設定を保存ボタン」を押す<br/>
＊削除する場合は空欄にして保存ボタンを押してください。初期設定のロゴに戻ります。<br />
<br/>
＜現在の画像＞<br />
<img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_template_directory_uri() . '/images/logo.gif' ?>"
alt=""/></td>
</tr>
</table>

<hr style="margin:30px 0">

<h2>ヘッダー画像の変更</h2>
<p>画像をアップロードするとTOPページのヘッダー画像が変更されます。</p>
<form method="post" action="">
<input type="hidden" name="update_options" value="true" />
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="slideshow1"><?php _e('◎ヘッダー画像のURL', 'minimalwp'); ?></label></th>
<td><input type="text" name="slideshow1" id="slideshow1" size="50" value="<?php echo get_option('slideshow1'); ?>"/>　（例：http://example.com/uploads/xxxxxx.jpg）<br/>
<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/media-new.php" target="_blank">ヘッダー画像をアップロード</a><br />
＊推奨サイズ：横幅960px 高さ350px<br />
＊推奨ファイル：jpg、gif、png<br />
<br />
＜変更方法＞<br />
1 - WordPressの<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/upload.php" target="_blank">メディアライブラリー（メディア＞新規追加）</a>に画像をアップロード<br />
2 - 画像ファイルの「URL」をコピー<br />
3 - 上のボックスに画像ファイルのURLをペースト<br />
4 - ページ一番下の「設定を保存ボタン」を押す<br/>
＊削除する場合は空欄にして保存ボタンを押してください。初期設定の画像に戻ります。<br />
<br/>
＜現在の画像＞<br />
<img src="<?php echo (get_option('slideshow1')) ? get_option('slideshow1') : get_template_directory_uri() . '/images/main_01.jpg' ?>" alt="" width="100%" /></td>
</tr>
</table>

<hr style="margin:30px 0">

<h2>ヘッダー右側お問い合わせ欄</h2>
<p>ヘッダーの右側の「電話番号」「住所」「リンク先」が変更されます。</p>
<form method="post" action="">
<input type="hidden" name="update_options" value="true" />
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="toptext"><?php _e('◎電話番号', 'minimalwp'); ?></label></th>
<td><input type="text" name="toptext" id="toptext" size="50" value="<?php echo get_option('toptext'); ?>"/><br />
<br />
＜現在の電話番号＞<br />
<?php echo (get_option('toptext'));?>
<p>　</p>
</td>
</tr>
<tr valign="top">
<th scope="row"><label for="toptext2"><?php _e('◎住所', 'minimalwp'); ?></label></th>
<td><input type="text" name="toptext2" id="toptext2" size="50" value="<?php echo get_option('toptext2'); ?>"/><br />
<br />
＜現在の住所＞<br />
<?php echo (get_option('toptext2'));?>
<p>　</p>
</td>
</tr>
<tr valign="top">
<th scope="row"><label for="toptext2"><?php _e('◎リンク先URL', 'minimalwp'); ?></label></th>
<td><input type="text" name="toptext3" id="toptext3" size="50" value="<?php echo get_option('toptext3'); ?>"/>　（http://〜）<br />
<br />
＜現在のURL＞<br />
<?php echo (get_option('toptext3'));?>
<p>　</p>
</td>
</tr>
</table>

<hr style="margin:30px 0">



<p><input type="submit" value="設定を保存" class="button button-primary" /></p>
</form>

</div>

<?php
}
// Update options
function options_update() {
update_option('logo_url', $_POST['logo_url']);
update_option('slideshow1', $_POST['slideshow1']);
update_option('toptext', $_POST['toptext']);
update_option('toptext2', $_POST['toptext2']);
update_option('toptext3', $_POST['toptext3']);
}
?>
<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'hanoi_karadaon');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CqSPL}q>F^A>x5Uwi`<EUn$0SUKa/*]/gGq&ftOPg(H`CIy(.d#&YEPn);Eivg_.');
define('SECURE_AUTH_KEY',  'g+xg/YYTn>Zke+#Jqn}1u}p|)l+KJl(aQVNj&XQ*Ek&T{`*Vv][6*W7qcby;E+[0');
define('LOGGED_IN_KEY',    '3)%?0gqsw1{cJ>!4,q[8Mq_lI8eemo oR.e-cW.|JT/FwA8ai*P#)8gzPn=+e]^v');
define('NONCE_KEY',        'jFxe6]$lg)ptzO]$kkIyp7$pWr,aGb~37r.t^>*v]9q}OZ|-T<GrD<5gN1MT9TK)');
define('AUTH_SALT',        '`C%L!<[pNffWOg>r9<y<K*Unkcp)gO@s P1:ix~`SO%)wGH$X3)1I0SK+:|~@5yQ');
define('SECURE_AUTH_SALT', '?Vm@MwK `eD^A9q887;/|J[ }9f}oKjnO$1Sid 2NKsV`@,cYEc.2;3u3BKY>rLF');
define('LOGGED_IN_SALT',   'dT%QbqJd!|k!d&.eWQfoBI`uXtQ$6=%VCuj /K-qX8)kc(V@HDo[OO`Sp4@ehML]');
define('NONCE_SALT',       'IsnPX({owPFVa};.18|*M)?_hVWP]FhZe94TktES$dI-{%9ED1l^hcb9C>y{B)T(');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_hanoi_karadaon';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

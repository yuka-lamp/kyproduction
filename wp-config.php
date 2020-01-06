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
define( 'DB_NAME', 'lamp-inc_kyproduction' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'lamp-inc' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'dresscreate1001' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql57.lamp-inc.sakura.ne.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'K#TTA tfG`HgxG1%RY1cf4YetC9Q>0%&o8zG1z+K?#A<sKQDr^IDFv$+1*(yl%Yl' );
define( 'SECURE_AUTH_KEY',  'SjSzSFyD)%:tNb5v[S&3?|Z%Uy=u|$q3]v3J!;4qjW}^~ndmrZ6QEzk9G#FhEe)(' );
define( 'LOGGED_IN_KEY',    'L2kWUA>Ld2:goHsn~t}|8UAm+oe%9@Y^^+mXt|AL/!)~hGH.D%0x-E&8{0^6Ux7;' );
define( 'NONCE_KEY',        'AjF&Vr0!Raq4r4*56lYa+b%2^ciY[:*T%.V3CGjZrg$gFIh:&G@(Y.7+xI^og9h8' );
define( 'AUTH_SALT',        'Hi0Mz3U*6rEY#u~d=0ToD{+`#R9J_qws|x%1!2DNOC/YlLCP/AaYqCCdAAnNfw3t' );
define( 'SECURE_AUTH_SALT', 'Yrf}V/Tq69Tnt9~kim/&Hqvv)PyIN{dpBV>I;b/fTLVX#KShG:J?HMfmy-A32Gh3' );
define( 'LOGGED_IN_SALT',   'ZV``l8U?oq}`t;`@H.M.i+[l_R=A%h0YmI4MU{oy870YO=_*!CV!69Hd.?aR,Z]V' );
define( 'NONCE_SALT',       'DqnsVDo>]ih1[Y<frVV)+yb`IK6Ba$hKq=KVSDcTYof+K8$bYXt=!O~EVD.J/P#`' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

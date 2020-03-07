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
define( 'DB_NAME', 'LAA0837996-wpportfolios' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'LAA0837996' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'KAgent0217' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql140.phy.lolipop.lan' );

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
define( 'AUTH_KEY',         '^}R >.c]<xj&{NyM%#O_&rP%i9]@lEoC@5pZEYV*|XlLl~>K(Q^[7k#CAKc_Z#s?' );
define( 'SECURE_AUTH_KEY',  'pYj9/f]|Y}wm&I09UBIF5hJ9X:_!7KJ&yXw&tc+4]a,5fG5Z~=Qo#dfOOw7 W@l ' );
define( 'LOGGED_IN_KEY',    '(7<FGLN]&B{2ozn,|1o7t(Bb;k_E,:C,ZbC^0J>;dsTPO!7dFqSb1.c,2AHCPlq7' );
define( 'NONCE_KEY',        'fTGoKR;<f-9pJ-18|){!cjrEuA]KPO24]J<#A[T[;$,Hj`SJ;<R:1(HW(mra1O~4' );
define( 'AUTH_SALT',        'HYbqX!FbpMu`Dr$Ju-O#!*P04N7{xsH6uSE<Sr J%:jJUx+oQK74r.Z?T=Jq%V-R' );
define( 'SECURE_AUTH_SALT', 'rRW22:e8.z im;Ipg,%.jV%u4//p_eT9j(I/^JzOm<25MOSSDTeB}Z@3e1ve,|7&' );
define( 'LOGGED_IN_SALT',   'Bo{)Mb[;XyMu=5Y/uTkBYs1JKj8%>D0^nD<pata7lEb+vTx+;Z [a!mxw=f2gq}v' );
define( 'NONCE_SALT',       'z;e&m{ltWl>H^/dZDcx4Sg`KxY&j{W#Mv8-&Ag&FDH/XX)In?&q9oq#a@_ C3BxT' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_masatoshiyui_';

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

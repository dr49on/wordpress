<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * *t测试 gitignore
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/data/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'fuck_wordpress');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'GU7kuuh39PYtd#$mUnki');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Yd*:Xeeovmf5i&1T7(<<_`Q(hap` j#y?-% Jy6#s&|lH~7,i:0$f!6sXTVn% }K');
define('SECURE_AUTH_KEY',  'cYqB^4os221Vah(1[hQ$>v!eL>6C2R;jWe5^MaL~MbEMvNd/kIz/Ge?|o~o&>Mld');
define('LOGGED_IN_KEY',    '@Js;kr?G$.%n)IFDq/~&hu]!AySAPM0/2Wb45a1#7`Q4J1&3*$4JXkz-6`zaL=t-');
define('NONCE_KEY',        '~P@3iQarzL9#pRx{!N5MvC|/yYz5QIN5m2{p85$+vMEw[}(`jr3u{BzpE>QJ8]pz');
define('AUTH_SALT',        'BBb-/&n%r;-$>)6T_->Lh1T?h|}f,IS]a|Ben9v?Nr-bAdXhy7|l^|~Z%}=]L+]=');
define('SECURE_AUTH_SALT', 'y5D(7p[(:)2b;|1?0*D7L^=%8wd]CG:adBN.m1`$f:$7w@4DkL1He(jiK%fQE^Xm');
define('LOGGED_IN_SALT',   '`I**}dRSrRGT^/bo=:w<j:/Ocn4.NQ]g=b*ZTXEd@HpkMmuNO{&(/gV&Km2g54/%');
define('NONCE_SALT',       'B_3) W(@@/=8_NPA.:s*6RNe@J]HX5QS&-xw:|2Gf=5C]5cm0, df28 :?(}$G2L');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

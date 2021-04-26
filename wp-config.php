<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'thinksmart' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O[-yVqJ9iT87|$J}K>RZT[IW[VRA|s`Sgqxq;L;{5A1sDlO^:I(L9X?Ic*`DXa*;' );
define( 'SECURE_AUTH_KEY',  'Y#yMi$|$WeS_N/ZHrQr]uvxu>wr<;tRt,xFx&COaex7A&, A+(lW!_hEz{rHB^)*' );
define( 'LOGGED_IN_KEY',    'Yyyl_KQ%{GU<3><337#>reY(j$!lZ0XaK_M){qbt.7kcy[o*?C))]XL5%=%.OLUN' );
define( 'NONCE_KEY',        ' G$kiadWZp)Y+vN=It#dmbLAJ,^_Pd*=$zq}$(N ~_)Ai^ok#C*A)F|SPc}0w8)s' );
define( 'AUTH_SALT',        'v#v_i_;}P,eM_l@gk39W/5&$]:(>:vyV~ **.kPs./#?H%9%1[qP:0tp7VhcW}RB' );
define( 'SECURE_AUTH_SALT', 'c=j$A?]^P`i+^AN/ZY4s0M2GQkI14zou8r,=_{h0 )[ %Gt)PdBd6}IDc)#cK7]!' );
define( 'LOGGED_IN_SALT',   '9`ksx7 0.G1%>z?9 ^g7pic;-P,d<V<k~fsci<gRt}bVuKav`h)_<]n{LcV3Xv)]' );
define( 'NONCE_SALT',       ';tcD}3A]:&BI8l`JWFA&+G74ci-;mrE81<Dn|vh,ZluHS#CK!x%6D:@t$W[m2%(P' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

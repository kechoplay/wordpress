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
define('DB_NAME', 'wordpress');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '^Zn!?5+V-bH4wD(avzB9:`p0+p$3(N?Lo</[y(XcZYLk%<wGLp5(> iae@R3o*S ');
define('SECURE_AUTH_KEY',  '+!),@1u(`b5Ds~N{M4_-8N>YM*$&wz~_79df2DCvc :xO}@GS}$)+Hy.gY^Nk*8[');
define('LOGGED_IN_KEY',    'vk*t2ZQ!R6o%J|(/f3GmALC( <xd c7~|.l_R7KBpiCWQjD%{hHNcvRe/4YAfy:?');
define('NONCE_KEY',        'w*m:A.fe+3Bx|&a.:8&(mA}WXqWx=&4-j]y;w($OBQ]ssVksW%g!k7<-Fy*:|4RX');
define('AUTH_SALT',        'WtNvO8Jn{1s5#DVmoTTiL!T-*HE.nCVyu90wNl,ip,C~*T1D.dsAdl7{WvCd3NI%');
define('SECURE_AUTH_SALT', 'oAMmq-bQQi`E&PF_s3Ub;H15(T<OG8Q4lqKzsuf+mOQ(8zPE5MDFo4(xq%&0<0E_');
define('LOGGED_IN_SALT',   '99l)$:bTM]u ]g0UE:HYx.,g!dv4]RTMw>q[&|yJqW12;,`O}> $7is2y?Zc)E=@');
define('NONCE_SALT',       'nKDC>x^lr9aoD bhKoNA<,8.4/rq-X:n~+WJ_=)qJ`rmye;G.G !<~C`r0_82Ni<');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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

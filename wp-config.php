<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'Vertoclothes' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Passw0rd' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<%|2T8{HEd-=%Vf:STL-3 );7e?5j&6SL{C=WP@Js<>9Xyc$i;Cj|Zie-E_c^)T5');
define('SECURE_AUTH_KEY',  '<W t,lN[.+Kd.,07G=SUU2Mi&iY%E8VGCwn&a&`MV@-84a0&taci<FV6||G$q]0;');
define('LOGGED_IN_KEY',    'i^[zsP-$iM%2CBx9Z`Q/1FnNSBVUgA]NJqzF_a:J{donzZS}pLIBU99P~J&:j5-.');
define('NONCE_KEY',        'h!-)33g*h.QRb)B&<^;mi<M/J><*0<@)wLwh^ObCs-09n(9N<YW%m1&b^VVL90.b');
define('AUTH_SALT',        '}c{mRT{XakX|[$tO,n&G+~gG>RAM;0cUd.Hx1xh&QJ*9+vb$ql--nT!E&J!ZvmN|');
define('SECURE_AUTH_SALT', '2XKpCY<QxGFZDHW*LRf*#4{+-&qKx8@.^v!1{_>`X<**p~zTV+$3m%Zz8-0tHA-n');
define('LOGGED_IN_SALT',   ']MY2qn*Evc;t~pz$i4urotxzMx(w.MqQerzIxkqml|#FSUG)4m%Xyx*C2pJEiBFI');
define('NONCE_SALT',       '+8sJq*dF+Lj69%&<)e[+Rng1O+G??:M)%~6B4<yoe/fhZLq2on^{lL L{Od>} ~R');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

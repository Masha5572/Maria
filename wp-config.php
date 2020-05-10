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
define( 'DB_NAME', 'baikal2' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']6qu;elk<g6Wt#Sk|.={QX4i+Xb@ ,B7{w#QDmwDA#mzcPo;&X@}o-mnu8]/ %yB' );
define( 'SECURE_AUTH_KEY',  'JN}UzUaE!278x1p}]y -(1t#T>B?{.(Q}A5^Y+:w#/,15F=c-<fTGI&B JCVY>T;' );
define( 'LOGGED_IN_KEY',    '<#vNj^!Q/mvjH*AWK9+YZ*Fpv:I0k0gTFp1#4K3qEgx&F $=:6KG1>I9x8sw{QXl' );
define( 'NONCE_KEY',        ']{0a|UjF2xQE@fO>yD!B?7|=o.fG+98v :Z?!u:>X3R}VX5yi8_mF37-`:(SNeds' );
define( 'AUTH_SALT',        '&pGcm@Zm*xsVLYql)ru+pc~`ep>vQ/(wC!>@3$[KN=z?UdrecWo! UR*={M6TXOU' );
define( 'SECURE_AUTH_SALT', 'F24}m^,JCNW?yLJQu7~=9_E0Y,<Oun|i SF)??S#8/h7A95[nirn5S_8g/S&6K) ' );
define( 'LOGGED_IN_SALT',   ']}!>iZ8ox9Xw*ySwfzxJ$kG[+n4<B*ax]BhW9[,-}N!W2U9e(lg?3/iQ}JY{MkR3' );
define( 'NONCE_SALT',       '3hc5+BW4*ewn9W2~`mH,&Ld#Cf`qw~jCq(~)cv1*]wvQ5$ecex)3LBWYL&@?)T@k' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wbaikal2p_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

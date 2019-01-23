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
define('DB_NAME', 'rbk-service');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.tm!idMg,/wU]=037n5VtJn~`2>GN!Nh4baMy8QhtZ5V82#XDOx57ZjP<%N]_r(G');
define('SECURE_AUTH_KEY',  '%Q5q63Xz;p-Lf*I`6hSsdYks<>Zy*mmejdL{furl$Y[~@0&lI&l8o.63LDtPzq?[');
define('LOGGED_IN_KEY',    '-MpdgY<gD%tYtx&N}=/zUlIqq3A~eG}>Ux#@F0V~K(?y@0Ns}kb0mrGs;bcuJPH)');
define('NONCE_KEY',        'T_s$[m*$KQ0~H`&aTE7oP#sn5@<W~$Eum{}e$9xQUJ~JZl!wYJ YaT0qM7?]>VfY');
define('AUTH_SALT',        '9|h++)),!k}C7=J<rq0ET@DZ+tD+,t9y6A665{FyiV6KG4~hek A(]iZ9xQOO9]s');
define('SECURE_AUTH_SALT', 'Uzgy!Vv}{yV&:VNe_66kp?{.4,n-SbE]nN1<=G^Fn3zs8B@WAh/m)x}#xsOVh)LD');
define('LOGGED_IN_SALT',   'z0-^XFc*T]J,}zz!2 8?cY_~:Yw%voYz$dRPq~N$@hnk^VPhR[dH{Q/I{bBD1z5J');
define('NONCE_SALT',       '(wCmt6]$TB.4UMwDGvBmYR)<B1_5d~U92LWGgME]4D_:.}uNtVIgj&g7tOoXR:AS');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

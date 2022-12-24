<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'five-shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin-five-site' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin-five-site' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S3T++$g$Ge6v0jXo]Fi?QNAkh,t0FUi+IF5@hMs)@!<zDa+*AFvq=2`gD>GGlY&&' );
define( 'SECURE_AUTH_KEY',  'tn3,3Xi|]TrEHKKe:FJ5mYY|b]Aoth~3)n01ZyQ2kqq/pJI73P*5;MH^yZUHdc3p' );
define( 'LOGGED_IN_KEY',    'K[b/6<3>PWu9ujZWClbYtnE>Ra@SOu3!A;]t(9y9*crqh]VyNE`#Z|Dg`&~l(Z^x' );
define( 'NONCE_KEY',        'tmd#{EaTE>IVo26V,yzE{b29L4$Y:SS =x1^tPHC_/%a63 UA?g:&tx- [MDBU4_' );
define( 'AUTH_SALT',        'Pnn=:9rl8`.U%ZMYxNciVU<_at>lspa,=b~:kCp593Xcab?[:s:#]Rx|Tp*-+ap?' );
define( 'SECURE_AUTH_SALT', ';i/h(dkjvV2))LMY&Mu}A qf)rK}cY!3aa|DFe~j:R-Yiq `;UN5Q?Z<y-6K8xj-' );
define( 'LOGGED_IN_SALT',   'oDb$N0a_&L?5W`!VMogY]k7Zq~bZ=YaF`j~@DE?&B4SO~db3CS+6jn-;EmW$d~vy' );
define( 'NONCE_SALT',       'W&y:V>5%,Ul}NIW;24$)ePSp:15K2M6! NeX>[8eHY*hPLw*jEx%bL}m#d^5FrJ]' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

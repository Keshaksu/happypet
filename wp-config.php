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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'happypet' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin_1' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q6TM}*U7W6N:Fy:Kj>PC7m2iX4/Y`mspC%(#,h<RV/^i~sw}=JEpk6SZFUEF tct' );
define( 'SECURE_AUTH_KEY',  'xp5-AR{!%h`U,s%,F59V6{II~@?QAs#SVx{njyeX9sgJ(CRunf?s&qXi|c_jfco!' );
define( 'LOGGED_IN_KEY',    '=CP-*5%0b{u [3sPAV.Ih|3BnQ0?VzpS/yz1Z2uCq(438IN8>;d{>o*#>[3HQ=9<' );
define( 'NONCE_KEY',        'h+$-bn>iXX(Y$AbjD`yv,3X-M_V*j/gAFfx!/YDb`&Yr7L5z@qz:AV?mA|3J{7LM' );
define( 'AUTH_SALT',        '<V{M]9W-uKa0SeDnGW22IVi%u[!G#W=?]YzT|~6 pN6M5#%$A2EppxTZG;e|&`{T' );
define( 'SECURE_AUTH_SALT', '-ks?v/Tia2+2.22l)}+m7oSPIP>mQp(pwaHeA~!p =@wJi%W %i7qRO)[DDQOKfo' );
define( 'LOGGED_IN_SALT',   '(}I-#4,JS/{#{a7Mlj?9)vzEy(?[s%1-Xo9++pR`5lb3vH#2=3rrR@5-,MN[bpf-' );
define( 'NONCE_SALT',       'NfZ>9ewLLVz!JU}mxq*wOgwwA$xI{OPqr><W)zQX5T8GxAnbZ!tO2fRV//Yct}m`' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

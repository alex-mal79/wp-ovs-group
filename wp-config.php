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
 * * Настройки MySQL
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
define( 'DB_NAME', 'ovs-group' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y9VP?W%)g]$j<kJ`*X1>lIt^MpHjOCNH9UfULt_mrDl:N2,zSm(*Fe8bu2_>@;zs' );
define( 'SECURE_AUTH_KEY',  'BxO29OsIl|;Pzm&ocRPaP!S`b@X<+^V8vO]|2}V9<[IxL$8.+]qtoJ2i,a$&<}hF' );
define( 'LOGGED_IN_KEY',    'oHN9Evwfl$@}l|_ULDzLq^zk)j<Yy90s8F53CCrLX/JLb$<qge&rQ#p`#{ePYPYo' );
define( 'NONCE_KEY',        'Ycx^uKN&.m*:dPMe>rYRCk<p[+jT-UsBvsh=hIue_|R_ <k^h?]V`2l F-ZMlJF,' );
define( 'AUTH_SALT',        'BbM}.{1gU05!l-A^.ZB.h# WrE{vq|=*RVbAI>`f52FI772Xx0h;*mG?:OziIAj%' );
define( 'SECURE_AUTH_SALT', 'hAe$8B&-D7k4sw3i/gP c%3:#vEvg;im;4INP7lH~JsfqdL4v?L>kvj6^8Bxp+kA' );
define( 'LOGGED_IN_SALT',   'u{B:PJp^9.v~<rHD-/2),smU9h$ <k&:G5Si5S!u1JG>:7V$zj+$QvE~Tuk!^3]m' );
define( 'NONCE_SALT',       'gu<VS+fUst5w[&nAuPN~SUWMG_O|{^uNVTJtg[$x(`OyIo4Yq_x{d},!@LMR]ED&' );

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

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
define( 'DB_NAME', 'mydb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'UV[QtAeo!&VA3#t^:V0+A&WS!T8moKKD1V]]ufOiMSc,rz}}p2rDW^K}q^T9;YCu' );
define( 'SECURE_AUTH_KEY',  ']9( HG]UEo:wtv#Kh[c3xqm~9e6+^(t7f.<.$6v|V)+Z{kM(qov@&;.R8`~Wp%5|' );
define( 'LOGGED_IN_KEY',    'kzPhP]qZw[:AoYrx}bU<2vfMf.NkR8#z0I4sS`iMXu1N%u^Q/kU_{NLnH~8{bWA7' );
define( 'NONCE_KEY',        'W9r=LdU{/9FT.xT|I+_ +wseR.UeC6qcW|H2~3x;YyNF@?Sv-Lqk9SvJeO-V9nc>' );
define( 'AUTH_SALT',        'q}npl;P3It3?sXq`?1BKReY#F:T`5NL:2W7nxvv65t;],`miaEY5g9GDZJ_ZO~m_' );
define( 'SECURE_AUTH_SALT', '&&sz:Tl!5?#z:+Mh,5%.T.+L~%7r3J!a8?d-}VlJC4=]Fl>k,pg.|uY&eAU==c+#' );
define( 'LOGGED_IN_SALT',   'k.!dle.iYax57StJ3(90lK?cX$(XPlF)yHwcunzKtkG_{><[9ia{i3Ur#NuLu%kv' );
define( 'NONCE_SALT',       'n!m$#d^1-#0c#|fzq7zyJ8Ban$XAJb8G>?w!VOiB*,x*n ;PRNQodsYX++4[#l/[' );

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


//add svg+xml
define('ALLOW_UNFILTERED_UPLOADS', true);
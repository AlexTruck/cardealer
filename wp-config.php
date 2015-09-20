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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'wordpress');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'cvubSX31cvub');

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
define('AUTH_KEY',         'I%l*2]48//6m|`ZhX|An#6McYy}L>O+~5HB[+@Dn^`r(^Z,cN$`H}+R~Ql-p9AQ+');
define('SECURE_AUTH_KEY',  '{5*bIGNn!VP$/;|[ auAI7OZKpe`|vh JlI80jfo9I5Whsg3T>64yoJ;W~T3`W)c');
define('LOGGED_IN_KEY',    'q~w&z6_-wacbNm:iey<&A^ybfWe[{g,zRKEoPho=Q2|s~?s|-Tx,r[J#)9aU1+(O');
define('NONCE_KEY',        'Jbgs~9.KBeS`+f)m6T&@zj0GEyQjB$-#^}R#T|eg?Ff,u0|@E61/q2T{5R IR/tp');
define('AUTH_SALT',        '%3Ehf},%x4K,VFvRhA_&&{C*CJf.77GLtXZ!lsK;ePuLU*N/B.|q+o]Jk=_#00CA');
define('SECURE_AUTH_SALT', '(GNNiU[$r@L^BaG.wtwB)-*3{CR4WMR0PlH*0=Snzk)j5a=m6FsC@G:>&4[JROXm');
define('LOGGED_IN_SALT',   'tVD86`#m}u>@)-}Gvm#N0 SLU.A4?7|99wl1_k6fS3 C;UcQI(os9^TprtEXdY#7');
define('NONCE_SALT',       ' Gus51,{7(5:SbT-K$b>auY7558PvW[L)P;M.B+5=}(|64Q4%Tiop7:YOn`-|al$');

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

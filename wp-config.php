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
define('DB_NAME', 'wplavr');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'DIbz1&lRf4jnSN~+9>1}9_P_Q@vLcq[/`ENgaeY~}NC^.m6GM HeA4(7[nl,sm*V');
define('SECURE_AUTH_KEY',  '0yAEg=tYLkX0k?.;QHS;(tmk6(`;2.+{M!^{?{4SW,%nAr}kQwF_ie(Z]nG/v>#j');
define('LOGGED_IN_KEY',    'qMN$-%}fDyfA.&U22Tp(5*x+[/aE8p&wk=GmlZ|6Lr5$*nK*$Z~CMA;?;,FpzY?&');
define('NONCE_KEY',        'C/]5C[qAGMulOb[3F$4uv%Y&EG1yWVhC9].oKX;7np[E}Y3kE6K_i4OR:t,MUNh|');
define('AUTH_SALT',        '3q]T[Y*iY8*hcE3qJ9CG1{[ZmcvmY%eRvoMy0=Eslw&vaT!y5bf8Js.V_LcK:c^P');
define('SECURE_AUTH_SALT', 'x&M.,E$swz %C,v_5W{42Sabr+tu!+NKr%oV($325cZIg*>yA!63#@G)v4(^!tqn');
define('LOGGED_IN_SALT',   'k<7NM{HPJ#L *{;sxpSj-)]AK%b_``^@uZ+w3nDg`QLt<.{GpjaLuThzU>XZ??!9');
define('NONCE_SALT',       '?NXBXgfNqU&:Ax,RFf]Pva@X,s<=8pgvANIf-o;i}5Y4[MU*8@CyD$/ttSP)?)vp');

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

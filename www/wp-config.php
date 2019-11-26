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
define( 'DB_NAME', 'vagrant' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'vagrant' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'qLV9eUzH<%Kr>` 1!j%eb*I-#j=MhVz <I7Il%]7A7-/PF6}SvJ{.?#2)HY:nkdF' );
define( 'SECURE_AUTH_KEY',  'f$NcEJ/VEPpMHKI()[b;6^6tsGh_sW0ef caLKb%>F7kMFxq%v;(5L9(ZGbz4u$d' );
define( 'LOGGED_IN_KEY',    'p:*`~>L%2YrD|9f[#;vCX$QlxmVUj}Rf|(?|INXfRb^?QaSQDCR1d7LAO;FT/NmG' );
define( 'NONCE_KEY',        'N%Xfnb}*S O69(ERjiez d0f1*]5wql/ukxkkiO/[]rQn7xQj@Mv7]r}bs33)O2d' );
define( 'AUTH_SALT',        'u=slazrvaPRF5*oOUFG^]p=CPEok.YPT~ynW{Zj80kNhGXoCke?=0E8gPsaqYqu|' );
define( 'SECURE_AUTH_SALT', ':B0Fc1 oY74Zx%8Eet={<fl//30}&V44RiBMP|N7 s?H)bx4ZBZgS]<0#p<vFm}6' );
define( 'LOGGED_IN_SALT',   ']j]Q>YMQ3<}:Q(m>Ls<>9wF^ebzbmH//6.i[KTa^x]>P8pOY*0thK$:[?H]#~w}F' );
define( 'NONCE_SALT',       '}bhYEQamhu9KJbKn=c:nI}csH4DXUBsx{z}}7XgdM1cEH3X[DnbQd0zcS=TP$J}l' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'AUTH_KEY',         '`$??oD!n0cr~2%W,r4?^JLssuHeZFMsP`~4|%`<l>*Tdjl5U&nr4W1womvbF4[Qy' );
define( 'SECURE_AUTH_KEY',  '+v0 PC~/xn!,qZO4S{/0tNQp^J^}LWV#Yv&/l?{ob)g$OAIk{14;jRJR ,(nIKx2' );
define( 'LOGGED_IN_KEY',    '(jx9U<h;MP[~}wTtr|iFu HXx|b)R&>w(!Z]%4(}6-M+sptb5(nXC[S7xP;{G42f' );
define( 'NONCE_KEY',        'DIQ<2A}tG53?jVAE>Wi|83j#-7>f5/Yz89QL-ts>c,y|^FAUBS6<Jx*OC5pCN~n0' );
define( 'AUTH_SALT',        '6#[8PIm7d v]ZA-E0Oq;>m+{[<]*fi&epT6:grE-}ej]5%4^N1:4w:nOr9XlPRix' );
define( 'SECURE_AUTH_SALT', 'z>;+m9Msi2%Q!yTb`t>1 GoH1a9E<#01|*h^:g}{95r/I:k+%[6w|mT0w]<5zaX8' );
define( 'LOGGED_IN_SALT',   'zTA}8->x $-Z#XLl<G|*<u9~{! X59N:[^7L[Zq0T?I.|;EJ43STt[)-b1<.o6yn' );
define( 'NONCE_SALT',       'ydxQ|5OWR6B;fw_/&_)Ym|4q/lcgY(qtm++S~{nez|c[c0C5Ll-k9e7R(_I#T,/R' );

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

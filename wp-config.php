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
define( 'DB_NAME', 'oculus_bd' );

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
define( 'AUTH_KEY',         ']+=0FPhe2,Pin+qwE)+R[&4]]Y($)PAX) 625loRJL#,rRIMoP,ICJzqb:Updq8!' );
define( 'SECURE_AUTH_KEY',  'mo@Z~uBd>Wmy5mimQq7N1;.~w *[ctZwnyKlTkb%i(N?0%lj5?Me5TO>cnPhqc8C' );
define( 'LOGGED_IN_KEY',    '0:sFZ^2o`a)_<mz@b~pxpPlxg7LC{r%(7VTq3F3kiV3 y$zX!fm%b+0c^u65%SSr' );
define( 'NONCE_KEY',        'OU$#RYcxZ(e4SDyc<Z5$&vj1[1!pyAZG@qO:~}yng=w]K_z7qf.DS/+#<9ERXU5b' );
define( 'AUTH_SALT',        '#]R0]@blV7]Q@Q)P7-iqAA{eo@51S: <FR7u@pe fF>3<V&dbiTxM/bXd7$A3w]r' );
define( 'SECURE_AUTH_SALT', '}3CIH@o1v&z?t!9Y,A]U-fEDFIg _U5?haB44-uyD@BM9g>6cNVh#+4K4$XUlmjA' );
define( 'LOGGED_IN_SALT',   '?fhA/67$zF|5}OQ:zm]dLDhe0|-uSEU.q5!SsXCr*#Kl7b6_7[Wx;KjC1&zhm+&S' );
define( 'NONCE_SALT',       'SIYO;vL8 u5SQ{oQ3U#*saX;Hw36tK.n9.![$|,zO-W&{=PaHE5dm.U{q].W<R_Q' );

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

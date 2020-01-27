<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'dbs267433' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'dbu264735' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '@Fer607372785' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'db5000273997.hosting-data.io' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'uqufDJuSrlc+OxY{]a!Ql/^0PD=I/M-B4DX@aA7NkAi:s ![zt%-4;vjZao_asha' );
define( 'SECURE_AUTH_KEY', 'Ct7<~`CHGMbQL}vQ+t=%Q6_vOE^W>LA u&&4h~KOeK:24nZK-Fi{04BxUT=D}OW>' );
define( 'LOGGED_IN_KEY', 'Ff&K%J#iHSETY93931>J[~Twy&q%(Y+<wgtsrz&HgYNU%em&lg**<(;6vA*N:r7]' );
define( 'NONCE_KEY', 'UdC~5jc]~@fXZH dRAKquxt$>T[^?LiA]|sbtK-/^ljTC_nsb(XUfVydzxq@v.y}' );
define( 'AUTH_SALT', '|LT%0&/K`SQ$kI+/t+?B+}Zn*Aj4oS1O@:tG`Ti<~m:|OzJqb4Mr<-gCU~8b{@=y' );
define( 'SECURE_AUTH_SALT', 'zUVD]7sp.e(3Sn9Yc}5%k=I_=NS&s@5|4mQsnZvM@c|F(WO.[U,?acILhlFKKC#)' );
define( 'LOGGED_IN_SALT', '.Big7P@{;|^BYpko)n$i(82@$HW2Wko(pWJ%?^y!uTeK($:=OphT?(5zifII9^!j' );
define( 'NONCE_SALT', 'f6HY&cV7w%_dtmxY:sVrUpFZr^y!^;dp2Z}oa3Q[>&Hjq]ch?OXpIF~Fd].Wj$jL' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


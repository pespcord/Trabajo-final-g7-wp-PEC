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
define('DB_NAME', 'beplan');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'Ff.p>n;H%B>Pyyz%n:O](1gnL7~j[q{cD<^eF?|dY&>6s_TH{4G4?@of#pM@^-&n');
define('SECURE_AUTH_KEY', 'S21LH]>2H*RKd[oN%zBL>yWu*Ru7ya$t5KcLO&c*DjU3*JNw]%9R>;]L::szB{pO');
define('LOGGED_IN_KEY', 'v,X&4aRZhm}n,@b:V`3u]?M<O0>`&*{MXB?o9l5yi-@h1eJn;QSuM*`dDc,]v2vh');
define('NONCE_KEY', 'aTb4mTV3[gU(/$XfFO3`l%|5o<q! W!%lT{b/vpZi,Gba;hnIp^#d_-BxsrZ[|l5');
define('AUTH_SALT', 'Q+5O9.~Bl>O#]^`R{ $}3Lr~)sEx}zNDa{whcumtgRLMLL~wp^*wy(KFuWSEBUdp');
define('SECURE_AUTH_SALT', 'f<`iZ:tb-KQ%WXg<o:,%)Cr5s<KNYOz 66}C>Y?E[uy~5)K[pwE`~ND|!s&Vzstk');
define('LOGGED_IN_SALT', '}JF4(-ca~/EJw91)?6@/EkEIC#K#Vl4nKc%m;)@{4ZI2qu}>CHDX&glxDYVPS~;G');
define('NONCE_SALT', 'va`f8});4ar%Q6[_>g})^>@jn@YRSfxygifU_H5I.jZs2<W`#XU@s2J2z}]OZ&1}');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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


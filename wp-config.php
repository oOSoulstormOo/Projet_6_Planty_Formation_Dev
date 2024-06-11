<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R[6CAjV?2Adz6Zv8LZMM=my1K3Sh~w}y8Uui(rwj=p({A:~wyYjxE#0u0*!n^5TT' );
define( 'SECURE_AUTH_KEY',  '6PW<XvY?9KE-*ddW$W5#6v[7]83;d7Pr>Zr,:&agvg17#:M.WU|hMH?W{cgGQ=sk' );
define( 'LOGGED_IN_KEY',    ' KGDXwa 8k| Lb+OOGIAGK^FSQ5xpHt B*S;WU`_trZw_d@!/w@-<=;R?w6}B8(K' );
define( 'NONCE_KEY',        '@{%3&O}Uh2DHbl:h;ONrt{;A_Ex@&/@Lo97)4);:k~`6]l>1Kp7j&#%9YIpJ9EBh' );
define( 'AUTH_SALT',        '{W.&$sqtb~c!z&jhK-znrO2Z^pN`dth;XW@(o(>OE>Z%vO+b3//79r:gVWk0un!I' );
define( 'SECURE_AUTH_SALT', 'ER5EX#Y`T+cM]PYo2zx:CC){w~1VIFtq1vq82/vkwhz]1bpa#hUlUT<5LG{M9sN[' );
define( 'LOGGED_IN_SALT',   'rRsYrapY-p6wQ3|J)8-Lj0~+=)fc^iy5}|x4pm9G}vN{Dh_(t^R|YDK>4wpbigZG' );
define( 'NONCE_SALT',       '{6EC6UG#zBDNfZLQUw|uxX6=1l~RcS4>wNz]BD4x9I(c!>209sBjH4d0O=##A{P9' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'geeps' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'aK{+R>uKb&qUj8q[.~ViXx&3HS 9N!%*M7R6zxdfU:}tfA&<LP#JmTMTHZ[#K)sY' );
define( 'SECURE_AUTH_KEY',  '(OW.s{4sRtejGv}G:6Y_&NX0`nymCWtA}Um*>!X2d(6uzcMfe8)qp4yfTbv1wM*3' );
define( 'LOGGED_IN_KEY',    'YwTT>Pt)~/Gz+;nd3j(JYf+MLVd.$}BA_RCww{:e8Sqw%N1e8{hh};rCcfY]~FnB' );
define( 'NONCE_KEY',        '3r9n[dZ*Gy%So(.1M&U~d $pJixjp942>_,|VsLJrx.:?@1~Yqz2tUY4i!W+E,_^' );
define( 'AUTH_SALT',        't q4/Wi6J(2I$*-Y`G_r8m@U4Ac~^kQg-d7B+mP*B5g#Z|7s8Z~$:opQMPEwLT!H' );
define( 'SECURE_AUTH_SALT', 'vifR5.yk,bcJ`(Q+u;Pke&dd~au3^AYUjJLPzZzZql7Dy}M]7PX&BmYAwh!rZn(O' );
define( 'LOGGED_IN_SALT',   '0__3y2ABizcuh{LGR zZKiSQR)KBnOr4CBqUy^C^Fp@MiHIp!uJx+nxg7(+d2 aC' );
define( 'NONCE_SALT',       'p7Wgi&j@:}sM(zI8A-*GCi;%a$kJaxLfz-_(64,3F}9c-qYrA4O2]F:zM!}oaRVt' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

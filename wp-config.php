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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'o<TOAVvCLq~k9l#fRg`y%[D?}35yaL`|4+KoJyLI~1&w}|}n=8kx|4K#3N^<V}Tq' );
define( 'SECURE_AUTH_KEY',  'l/^8jZC%h@Xy7?C)Wt.Uu-A}E>`8 8`126s/Jj0io.20?@o}VA&?k^@sjxBlSiQ<' );
define( 'LOGGED_IN_KEY',    '* {fOb{zW4_pHc$n[dUMPcmF5QVRWHC-kauWbXO(g+KTPgNs:PN7*r)[`Ez+&3dq' );
define( 'NONCE_KEY',        'C8Rq;+iu[Rar(5|, 7Q|$0JW*Z}V&UT6`XB(=[,Vjk^WMfb(4L5l|&p2w-LqFH#M' );
define( 'AUTH_SALT',        'ja2%^h!8<U -DYC.a)^><*:b9Y0A[R~V^khA-bNSCUDDp,r8&pnZ;N!?F#ddj1Qy' );
define( 'SECURE_AUTH_SALT', ':mr,Q$GUH^+an0[7)pJQ/z}v&X+no!4D2SGmRlbgLIUGOWpAOXD1]<^*L8~YJX59' );
define( 'LOGGED_IN_SALT',   'QU]Nad,IFM?qP[6]F3y2]vS7ljc:WKe!;(> i=D8><`+VN)2a_WUvBLpu-2ovYU%' );
define( 'NONCE_SALT',       'Z^^0!OVRiDV_8it^r&$0~xn;6$$~r@D!J0s(OB$,h9?A{T)zv_IXRz%=6_FBjZ!L' );
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

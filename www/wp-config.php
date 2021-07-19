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

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_ADMIN', true);
}

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'm~)a4PrFW:.Y+-_sWY;rhI^CG@m(8E=dYx082Nf?h(q=,|6q6u--y;lvV|2-/VN?' );
define( 'SECURE_AUTH_KEY',  '1yeyR~T-z=:2:3F?dMA@8[bE8Mn1uPU1MUbAl,[(aA{hT>lJ 9R&*^S!g,H!@nvY' );
define( 'LOGGED_IN_KEY',    ']lueM1<35DuAY!Hvq.q1>l=x!Iwa?XjgBYOfn1?@V.)@<)Q>zU5P4FT/|u1Fhl17' );
define( 'NONCE_KEY',        'xs5q;p|}[7vG/!hEI#(avaIekKNbDa+-$-6>E*1hpls,sP]@SH#15YBw(ZVitM:j' );
define( 'AUTH_SALT',        '9uVTt.pyUcff{fDAE$OmZ5*jr]wOKLslmw2FPG})=F%7y`|H_LPbTZrii|2e+yGa' );
define( 'SECURE_AUTH_SALT', '+(lGJ9J(tyXX{Yt5_FTDpDVX0uf&nZIAfQe`-qd=FIS;nPa(+<mY^g*}%|MRC2J`' );
define( 'LOGGED_IN_SALT',   '1cL+#E^p2aL4H$2^nv@d<)3wow_Q8w`RD $$HXfa5UE/u>EN#b~UM7zilm@A-|}8' );
define( 'NONCE_SALT',       'x<~S!.6e%#AebL=IQ~i]a{vcI{R,HsgF%jGJ+ZK(5[P~`qw!r_o.O8wu06$NX<f}' );
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

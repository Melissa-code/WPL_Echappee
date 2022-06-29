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
define( 'DB_NAME', 'lechappee' );

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
define( 'AUTH_KEY',         'GN22sxTWP5%12_J5Am3v(L26<vZ~-62%0`C5ct>*$&U/q+^9pJwt&1& suQ#T!Bb' );
define( 'SECURE_AUTH_KEY',  '>.F1aLSgoqPvR<%svwiIs:w#)SnCgr/3`V*RW*FB6>LvSv_tM**BjWobW,zCaQ5#' );
define( 'LOGGED_IN_KEY',    'O::5:$s*E<T$78D!L5J%; #XTgn&xRbH8A 2~r%w^;24W0gq:=k9g7Pktpt!wGU{' );
define( 'NONCE_KEY',        ']fB`?g<3H|/?jMIm(y-B<XI&MK/9M|E:o-L4LCf!D1><gWin@i2lwUazMDeZ5Z@x' );
define( 'AUTH_SALT',        ';%|<:M3oof%LNNPqlz4 fFL2D>(f:42iLk`T..puK5kQLor&t_1 ~JJMq9q w1pp' );
define( 'SECURE_AUTH_SALT', '|:lb6Ftav3dYAs{/ZlJa-Pu:$lQ&hs!fxY[hr3n-F`r(:Ka]S4_^A6rH%Le]u)P?' );
define( 'LOGGED_IN_SALT',   'Pf-XA(g;^!f1MG,!tPhyRC#myfFwI:J_Fv a;>UF3L8`z{t`WLtFyg_R4y` 4>p9' );
define( 'NONCE_SALT',       'PimC8OTX:gl!S)tf},MIzJ5^=ewO5^=,bh<}T&a1H vt4)/00WT%&ys<KqWRrFZo' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'jdle_';

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

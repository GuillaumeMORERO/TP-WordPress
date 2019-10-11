<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_s08' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress_s08' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mdp' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q%!?<fg}Rb@cf=EQVKy{O_:$Z:/{|E!d^WZtl:Ew@L0>@mgC5BE#q^q$}L,o0 0W' );
define( 'SECURE_AUTH_KEY',  ':Rr ,&&mx~&WF^lD$A{8 W42i9>50I]1>_^qj.)`9VfjimY{|.`]A()v$sA~jK3X' );
define( 'LOGGED_IN_KEY',    'bBx91SU9Z(IWU}]X~$j{id#[:Ax:u;8Dk<8vmQWXKqe~-^PJTE(>~fK/!H)y;o%Q' );
define( 'NONCE_KEY',        'y~qo6![t&pbL}v0j2/F4<D!6{AC[c-agEtH)MRP,M(i!r.W]kv fmQe@rC|%&O`w' );
define( 'AUTH_SALT',        '_k9YGl+l TU6Pq|3!#+0Bup_B xfKGL<3QX#.ETY!=hZri<Jz-NQ& qb3iUIPJH:' );
define( 'SECURE_AUTH_SALT', 'r7*C|-!3|+|JB#!CKf.Fjlld%?D,Q-S%1.RgmY+x3+5y&qTtOW<q~Xf2~*)cwvO3' );
define( 'LOGGED_IN_SALT',   '&_Y~c%T(I~#=w5wu@-+k$>k]%9Ae?Wj01hH+?m-/v;D%RfAV6<1jbLpuOD7:0uIH' );
define( 'NONCE_SALT',       '|4]FV&a_5b:>}5;{*njx2` D|5$6F6#,9-x5)KuQie^|>e_([#Y~M0^^$s)QFu=<' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

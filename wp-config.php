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
define( 'DB_NAME', 'onitetsubo' );

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
define( 'AUTH_KEY',         '6s>UiF#ksDW+I)ZPa]}/-9!txBL#WrkLj2zJoAHhPKQ2q@idO;6a7|%*Ia7;Me R' );
define( 'SECURE_AUTH_KEY',  ' fa*6__Vkp]q>|pfTZMdG:H|z4kb3 0DU{@S_KV]sRGb.$r:Vq.DS vu^Q8%TQfo' );
define( 'LOGGED_IN_KEY',    'B_zk(D,1pO}b0RGTI|W2yb?cyMfM7RPw!0byw@*{>)[3A(Na]A4+);IW_(Cav,(<' );
define( 'NONCE_KEY',        'g7/K/=X>Q,UMb7d:;N|zm[OjmM{?V9mYi1AW0$ukOX3]u +08f=siYHARZqu6mYB' );
define( 'AUTH_SALT',        'GQ)To}4t_7c85v|99~QBrjg+?JDQ;MayE,CcYztj@<-nM$3}zuXpbjD{w[=`G^V7' );
define( 'SECURE_AUTH_SALT', 'yK`i-/5R,BXTVgynrA@/&FMJG]EpMxpAOV=(,6}7Ug{H=;gP@E8+S_SNXM<qA>,M' );
define( 'LOGGED_IN_SALT',   '#sD3SJS(NMX{RPD6G{G&_^n(P9NVk2~puyL$ |#(Z_&ppa@Y*C&w0FeE>gJy%*rW' );
define( 'NONCE_SALT',       'qsI=#<c*dR6c 2o?wqY_*Y<w%S[w?|qk&dc2y8DW)DEf=0Cs1s!mNvcAUxCpMbzz' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'sot_';

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

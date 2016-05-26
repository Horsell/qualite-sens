<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'horsell');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Integra0@@');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xG6D_p2dTB|*y]e@!#+KVE0baAX(vteL=!;>;lfiDZ{%AaT=uetr6,4L(L|D1BRd');
define('SECURE_AUTH_KEY',  'k^$EQ3~P`f(^N_KO)CN)zQ=k2W;C.tU7 0&>5g@$-yA}UgZ`3NIx0LE!lngTS2-%');
define('LOGGED_IN_KEY',    'Z1c ?:4U;K0hhMj678@<y8l@FYww2!BO;0SpT(y!pNSj)/6S|;bkTSg}2{j,J Pq');
define('NONCE_KEY',        '_rZxIx14pzwcrUB|n?ehs3(~$+54tbqp?Y=L{Q(duFR%m?FfsG5_MA,R9dH~|F_O');
define('AUTH_SALT',        'g||,x]Tl|5lq!rKLo<?t3C d1wE2xJ?k6X>T#9]f${;cL,Z&O YdGoO>Hhrv[>T@');
define('SECURE_AUTH_SALT', 'HX+:cJ@rBC{rO}LfW~ C}.V @3R|q4MgprgnuU%jOkrSh-Ev>=n9&!;zU4FkM r5');
define('LOGGED_IN_SALT',   'D23Z>ynQ OC4+xd.q!P?87^^h5:L}]JQ9B{EjqPQVkh<)C4Y3^McH;u1P-5vbHu0');
define('NONCE_SALT',       '%#nEh/?aBGLyEa8,A!>k%P:or_wA%s@<&FJChO`-6zG`m(Fx-TO:k{pnA#)@JTG`');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
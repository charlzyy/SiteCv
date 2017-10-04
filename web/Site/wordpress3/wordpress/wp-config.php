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
define('DB_NAME', 'sitecommerce');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'charles');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '@dmIn1str4t3ur');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'u6{F5#]?{nz3E,`VkH>]yO<3ar2zlG$qa]545o<?LU=^5 D]J!^O I/74J~YzzK!');
define('SECURE_AUTH_KEY',  'F88>z<A[1HL1=&CKK$8g!?pc4NL.tGXp%?N4%F0?nP-;j*tLYo<274nJ9eweL@t>');
define('LOGGED_IN_KEY',    'BBBVbDT7T8~:+z%G@y6C1PB(&BSl_UrEcsji,^2a;e6EZe|+Eqx<}H?5-B;q:Neb');
define('NONCE_KEY',        '[h`*mL?rrF)dS$rSG|!-!:; r4DT:ho<Z`%XD0euJ}Su{+2a2U28lb}2lH9J{tlF');
define('AUTH_SALT',        ')+x3^`du-5qb$<3LTaQfVYqx}b_E-[]Vz]F~ef%^*i~+Y]I7 ?yA+RNeBS>a,:qR');
define('SECURE_AUTH_SALT', 'rkhA.%(]l:WA+?*UxX/1dFLM?`{{RU|QxO+Dd)&V Fp&c(hdb/*iv2$. DK1PyGz');
define('LOGGED_IN_SALT',   'U^_pc-|aj.NpJz-[Y/sS]U{P<p/i<zk&7/|$F=dW_7/u@LkabRE):CSn]5CNH+#f');
define('NONCE_SALT',       '&J(=lH3VMrSe8E@KS[XCLp(kbWuv%$h16=+hS?3W7E6nm+P+F<`b40>Xp~hs5?W%');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'joels db' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', '' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M9V(M[ig]qIN7ITn5]=n!$unVQaVO%P7rT|yr#+9:|5!3x3(5Kx5UvW[aar]~9L?' );
define( 'SECURE_AUTH_KEY',  'oIQ?spmsg}j^sx:mUO<KY<B?v[?cIX`:QyL1CR)Nd2~dv!.Nq2pJs/n4U5Tp6T[t' );
define( 'LOGGED_IN_KEY',    '$mw*$CjKQ.&9gcg[ n1yS6EzD;.woW2^{}$Nu(pfCCXs|VSBGkawGz~lK,P/VPqQ' );
define( 'NONCE_KEY',        'bk?d4xjo-/!Khjw7)*8ahLuW6ddT_Wsz+r2M`= (:wrbnDXx Y_yW~R.BEOB2;<I' );
define( 'AUTH_SALT',        ')EfU,$MCK=Z`b&}i;>SjuN,A`#Jn+3Qb2YH{+1N._7_dLjU#t%fD^jARn]f!RGF%' );
define( 'SECURE_AUTH_SALT', '-7Y!< </Kra]t7dH?R~Q@IzBnEbz<<w2}rfPR.&c-{fc+OsIxN;7F0~SuH~~DBU`' );
define( 'LOGGED_IN_SALT',   '#kQ@c@@K2QaMqQ;PuMd2y]a,+MZgy_24ypp{V4nJ2S{{OH?@@(NJ0$9_K2>HPV&q' );
define( 'NONCE_SALT',       'WpzA`e=[KU$qcX5}UlRgXA/o$smLv31KZK^Rr</KhRWCPJhxdU5fehScT+n#HnaH' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');
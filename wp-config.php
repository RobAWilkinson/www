<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordy');

/** MySQL database username */
define('DB_USER', 'wordy');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'sc(AGi/yI!@/3D3i+C6pvW5AV($G 4Qn>+n+VpAH^-Gm^|:MU!O[W5H.04OxrrgN');
define('SECURE_AUTH_KEY',  'zvWyawQ{y6+9QTwX,-(zNKH<s)C/78D;JGKr1n z2xs-%)#}{2|ak!Hci<-Bv22-');
define('LOGGED_IN_KEY',    'C(.:*v+PcmWyB+z0#+Y#]O?{1f+*H[Xk->UjmGB_X]Y0?onvH^@+~= <7M+/<7c/');
define('NONCE_KEY',        '-p&Yj~%?&sz6d0zDqu[HNV9C+IzF]@T+S6I|5o0NW=dcvbwXt5CEAZd+KbnD$q:1');
define('AUTH_SALT',        'U3J/n{_Pfu5xbZ`.Ow0*@<Qpn{-*Zh2fHKxY +2:uo l|?NDm*erk(b-4i8~>HZV');
define('SECURE_AUTH_SALT', 'd-jo1g&?Xh[9^UB2x3;5{kstGy-ML3pVm(@8>8I|li>Y?d_<TP53A*bsV%eNC)$+');
define('LOGGED_IN_SALT',   ']3Em`N;@`fd~3vj((8K+SFeZ@2TB>C~yb#n38gnRQD(7IwQvWLezBM|h8PhG-D_O');
define('NONCE_SALT',       '72&o4Wt|[b X=/iA^]zwyu]F*}|X~ w]CwJ+j<KUXJzT4Tr,/$ss`wsrKA R6m6|');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

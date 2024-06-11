<?php

/* Check the wp-config-sample.php file in an actual
   Wordpress installation or check the documentation
   https://wordpress.org/documentation/article/editing-wp-config-php/ */

/* DATA BASE SETTINGS */
/** Name of the database for WordPress **/
define( 'DB_NAME', getenv('MYSQL_DATABASE'));

/** Database username **/
define( 'DB_USER', getenv('MYSQL_USER'));

/** Database password **/
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** Database hostname**/
define( 'DB_HOST', getenv('WP_DB_HOST'));

/** Database charset to use in creating database tables **/
define( 'DB_CHARSET', 'utf8');

/** The database collate type **/
define( 'DB_COLLATE', '');

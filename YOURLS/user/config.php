<?php
/* This is a sample config file.
 * Edit this file with your own settings and save it as "config.php"
 *
 * IMPORTANT: edit and save this file as plain ASCII text, using a text editor, for instance TextEdit on Mac OS or
 * Notepad on Windows. Make sure there is no character before the opening <?php at the beginning of this file.
 */

/*
 ** MySQL settings - You can get this info from your web host
 */

/** MySQL database username */
define( 'YOURLS_DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'YOURLS_DB_PASS', getenv('MYSQL_ROOT_PASSWORD') );

/** The name of the database for YOURLS */
define( 'YOURLS_DB_NAME', getenv('MYSQL_DATABASE') );

/** MySQL hostname.
 ** If using a non standard port, specify it like 'hostname:port', eg. 'localhost:9999' or '127.0.0.1:666' */
define( 'YOURLS_DB_HOST', getenv('MYSQL_DB_HOST') );

/** MySQL tables prefix */
define( 'YOURLS_DB_PREFIX', 'yourls_' );

/*
 ** Site options
 */

/** YOURLS installation URL -- all lowercase, no trailing slash at the end.
 ** If you define it to "http://sho.rt", don't use "http://www.sho.rt" in your browser (and vice-versa) */
define( 'YOURLS_SITE', getenv('YOURLS_SITE') );

/** Server timezone GMT offset */
define( 'YOURLS_HOURS_OFFSET', 0 ); 

/** YOURLS language
 ** Change this setting to use a translation file for your language, instead of the default English.
 ** That translation file (a .mo file) must be installed in the user/language directory.
 ** See http://yourls.org/translations for more information */
define( 'YOURLS_LANG', '' ); 

/** Allow multiple short URLs for a same long URL
 ** Set to true to have only one pair of shortURL/longURL (default YOURLS behavior)
 ** Set to false to allow multiple short URLs pointing to the same long URL (bit.ly behavior) */
define( 'YOURLS_UNIQUE_URLS', getenv('YOURLS_UNIQUE_URLS') );

/** Private means the Admin area will be protected with login/pass as defined below.
 ** Set to false for public usage (eg on a restricted intranet or for test setups)
 ** Read http://yourls.org/privatepublic for more details if you're unsure */
define( 'YOURLS_PRIVATE', true );

/** A random secret hash used to encrypt cookies. You don't have to remember it, make it long and complicated. Hint: copy from http://yourls.org/cookie **/
define( 'YOURLS_COOKIEKEY', 'GJ~Z21{%HdA$vUSbdb[n{3VBqEr-0JKb1v7@07[9' );

/** Username(s) and password(s) allowed to access the site. Passwords either in plain text or as encrypted hashes
 ** YOURLS will auto encrypt plain text passwords in this file
 ** Read http://yourls.org/userpassword for more information */
$yourls_user_passwords = array( 
	'admin' => getenv('ADMIN_PASSWORD') /* Password encrypted by YOURLS */ ,
	);

/** Debug mode to output some internal information
 ** Default is false for live site. Enable when coding or before submitting a new issue */
define( 'YOURLS_DEBUG', false );
	
/*
 ** URL Shortening settings
 */

/** URL shortening method: 36 or 62 */
define( 'YOURLS_URL_CONVERT', 36 );
/*
 * 36: generates all lowercase keywords (ie: 13jkm)
 * 62: generates mixed case keywords (ie: 13jKm or 13JKm)
 * Stick to one setting. It's best not to change after you've started creating links.
 */

/** 
* Reserved keywords (so that generated URLs won't match them)
* Define here negative, unwanted or potentially misleading keywords.
*/
$yourls_reserved_URL = array(
	'porn', 'faggot', 'sex', 'nigger', 'fuck', 'cunt', 'dick',
);


define( 'YOURLS_NO_HASH_PASSWORD', true );

/*
 ** Personal settings would go after here.
 */

// Ldap configuration

define( 'LDAPAUTH_HOST', getenv('LDAPAUTH_HOST') );
define( 'LDAPAUTH_PORT', getenv('LDAPAUTH_PORT') );
define( 'LDAPAUTH_BASE', getenv('LDAPAUTH_BASE') );
define( 'LDAPAUTH_USERNAME_FIELD', getenv('LDAPAUTH_USERNAME_FIELD') );
define( 'LDAPAUTH_SEARCH_USER', getenv('LDAPAUTH_SEARCH_USER') ); 
define( 'LDAPAUTH_SEARCH_PASS', getenv('LDAPAUTH_SEARCH_PASS') );
define( 'LDAPAUTH_BIND_WITH_USER_TEMPLATE', getenv('LDAPAUTH_BIND_WITH_USER_TEMPLATE') ); 
define( 'LDAPAUTH_GROUP_ATTR', getenv('LDAPAUTH_GROUP_ATTR') ); 
define( 'LDAPAUTH_GROUP_REQ', getenv('LDAPAUTH_GROUP_REQ') );
define( 'LDAPAUTH_USERCACHE_TYPE', getenv('LDAPAUTH_USERCACHE_TYPE') );

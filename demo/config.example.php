<?php
# Developer Custom Define

/*
 *---------------------------------------------------------------
 * BASE_URL
 *---------------------------------------------------------------
 *
 * Used to generate redirect URL of this demo
 *
 */

define('BASE_URL', 'http://localhost/demo/index.php');

/*
 *---------------------------------------------------------------
 * HOST_URL
 *---------------------------------------------------------------
 *
 * The ILT system oauth base should be fixed to
 * https://ilt.nchusg.org/oauth
 *
 */

define('HOST_URL', 'https://ilt.nchusg.org/oauth');

/*
 *---------------------------------------------------------------
 * CLIENT_KEY
 *---------------------------------------------------------------
 *
 * Go to https://ilt.nchusg.org/dev#projects to get one
 *
 */


define('CLIENT_KEY', '');

/*
 *---------------------------------------------------------------
 * CLIENT_SECRET
 *---------------------------------------------------------------
 *
 * Go to https://ilt.nchusg.org/dev#projects to get one
 *
 */

define('CLIENT_SECRET', '');

/*
 *---------------------------------------------------------------
 * CLIENT_SECRET
 *---------------------------------------------------------------
 *
 * Go to https://github.com/NCHUSG/ilts#scopes to see availible scoops
 *
 */

define('SCOPE', 'user.login.basic+user.isIn.dev');

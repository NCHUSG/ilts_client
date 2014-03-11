<?php
require './ClientController.php';
require '../libraries/IltOAuthClient.php';

date_default_timezone_set('Asia/Taipei');
session_start();

# Developer Custom Define
define('BASE_URL',      'http://localhost/ilt_oauth_client/demo/');
define('HOST_URL',      'http://localhost/rs_ilt_laravel/public/oauth');
define('CLIENT_KEY',    'your_client_key');
define('CLIENT_SECRET', 'your_client_secret');
define('SCOPE',         'the_scope_you_want');

/*
 *---------------------------------------------------------------
 * Router
 *---------------------------------------------------------------
 *
 */
$method = isset($_GET['m']) ? $_GET['m'] : 'index' ;

$obj = new Client();
$obj->$method();
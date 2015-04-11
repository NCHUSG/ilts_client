<?php

require './ClientController.php';
require '../libraries/IltOAuthClient.php';

date_default_timezone_set('Asia/Taipei');
session_start();

# Config file
require 'config.php';

/*
 *---------------------------------------------------------------
 * Router
 *---------------------------------------------------------------
 *
 */
$method = isset($_GET['m']) ? $_GET['m'] : 'index' ;

$obj = new Client();
$obj->$method();

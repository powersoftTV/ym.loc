<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once('baza.php');
require_once('lang.php');
require_once('functions.php');
require_once('routes.php');
require_once('header.php');
require_once(basename(($_GET['page']!='' ? $_GET['page'] : 'home') . '.php'));
require_once('footer.php');
?>
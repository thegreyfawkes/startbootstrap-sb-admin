<?php
session_start();

/* Database */
define('conString', 'mysql:host=localhost;dbname=sb_admin');
//define('artString', 'mysql:host=localhost;dbname=cm_blog');
define('dbUser', 'ubuntu');
define('dbPass', 'verystrongpassword');

/* Template LOGIN and REGISTRATION */
define('userfile', 'user.php');
define('loginfile', 'login.php');
define('activatefile', 'activate.php');
define('registerfile', 'register.html');
define('loginhead', 'inc/loginhead.html');
define('loginbody', 'inc/loginbody.php');
//define('loginForm', 'inc/loginform.php');     <-Old syntax from prev proj
define('loginForm', 'inc/loginbody.php');
define('activationForm', 'inc/activationform.php');
//define('landingMiddle', 'inc/landingmiddle.htm');
define('registerForm', 'inc/registerform.php');
//define('landingFooter', 'inc/landingfooter.htm');

/* Template INDEX */
define('indexWhole', 'index.html');
define('indexHead', 'inc/indexhead.htm');
define('indexTop', 'inc/indextop.php');
define('indexMiddle', 'inc/indexmiddle.htm');
define('indexFooter', 'inc/indexfooter.htm');

/* Template ARTICLE (post creation) */
define('articleFooter', 'inc/articlefooter.php');

/* Template GLOBAL USER */
//define('userPage', 'inc/userpage.php');
define('userPage', 'index.html');

/* Template ERRORS */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = new User();
$user->dbConnect(conString, dbUser, dbPass);

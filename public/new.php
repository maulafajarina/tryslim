<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response; require '../vendor/autoload.php';

// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'dpw');
//
// function getConnection() {
//     $dbhost="DB_HOST";
//     $dbuser="DB_USER";
//     $dbpass="Db_PASS";
//     $dbname="DB_NAME";
//     $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
//     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $dbh;
// }
require "database.php";

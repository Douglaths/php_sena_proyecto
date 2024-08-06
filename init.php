<?php

if (!file_exists( __DIR__ . '/config.php' ) ) {
	die( 'ERROR:No existe config.php' );
};

session_start();

require (__DIR__ . '/config.php'); 

require( 'inc/publicaciones.php');

require ('inc/class-db.php');

require (__DIR__ . '/inc/helpers.php'); 

$app_db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);

if ( isset( $_GET['logout'] ) ) {
	logout();
};





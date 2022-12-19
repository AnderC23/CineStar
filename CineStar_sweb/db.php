<?php 
	header( "Content-Type:text/html;charset=utf-8" );
	header( "Access-Control-Allow-Origin:*" );

	function BaseDatos( $ip, $user, $password, $bd ) {
	
		global $_IP, $_USER, $_PASSWORD, $_BD;
		$_IP = $ip;
		$_USER = $user;
		$_PASSWORD = $password;
		$_BD = $bd;
	}

	function getConexion() {
		global $mysqli;
		global $_IP, $_USER, $_PASSWORD, $_BD;
		$mysqli = new mysqli( $_IP, $_USER, $_PASSWORD, $_BD );
		$mysqli->set_charset('utf8');

		if ( $mysqli->connect_errno) {
    		printf("Connect failed: %s\n", $mysqli->connect_error);
    		exit();
		}
	}
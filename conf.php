<?php 
	
	const HOSTNAME = 'zibrandtsen.com.mysql';
	const MYSQLUSER = 'zibrandtsen_com';
	const MYSQLPASS = 'eLgdoNZv';
	const MYSQLDB = 'zibrandtsen_com';
	
	$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	
	$con->set_charset('utf8');
	
	
	if($con->connect_error){
		die($con->connect_error);
	}
?>
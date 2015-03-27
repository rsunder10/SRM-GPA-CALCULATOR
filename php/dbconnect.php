<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="srmgpa";
	class serverException extends Exception{}
	class databaseException extends Exception{}
	
	try{
		if(!@mysql_connect($host,$user,$pass))	
			throw new serverException('Could not Connect to server.');
		else if(!@mysql_select_db($database))
			throw new databaseException('Could not select the database');
	}catch(serverException $ex){
		echo 'Error:'.$ex->getMessage();
	}
	catch(databseException $ex){
		echo 'Error:'.$ex->getMessage();
	}

?>
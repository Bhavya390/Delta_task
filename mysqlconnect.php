<?php
	/**********MYSQL Settings****************/
	$host="localhost";

	$user="";
	$pass="";
	/**********MYSQL Settings****************/
	 
	 
	$conn=mysqli_connect($host,$user,$pass);
	 
	if($conn)
	{
	$db_selected = mysqli_select_db($conn,"test");
	if (!$db_selected) {
	    die ('Can\'t use foo : ' . mysql_error());
	}
	}
	else
	{
	    die('Not connected : ' . mysql_error());
	}
	?>

<?php

	//seda lehte külastades muudetakse nimi jukuks.
	require_once("session.php");
	//siia oleks vaja faili, mis paneks sessiooni tööle. tuleb session.php'st
	
	$_SESSION["name"] = "Juku";
 
?>
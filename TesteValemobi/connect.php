<?php 

		$mysql_server = "localhost";
		$mysql_user = "id2744770_testevalemobi";
		$mysql_password = "123456";
		$mysql_db = "id2744770_testevalemobi";

		$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
		if ($mysqli->connect_errno) {
			printf("Connection failed: %s \n	", $mysqli->connect_error);
			exit();
		}
		$mysqli->set_charset("utf8");

?>
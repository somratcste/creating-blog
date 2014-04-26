<?php
/*------------ Connect DB----------------*/
define('MYSQL_USER', 'root');
define('MYSQL_PASS', '');
define('MYSQL_DB', 'blog');
define('MYSQL_HOST', 'localhost');
  $con = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
		if (!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
  mysql_select_db(MYSQL_DB, $con);

    //include_once("resources/func/blog.php");
	
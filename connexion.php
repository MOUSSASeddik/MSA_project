<?php

session_start();
 define('HOST','localhost');
 define('USER','ngttn_seddik');
 define('PASS','');
 define('DB','ngttn_ngthub');
 
mysql_connect(HOST,USER,PASS)or die('error');
mysql_select_db(DB) or die('Base de donne introuvable');
mysql_query ('SET NAMES UTF8');
	
?>
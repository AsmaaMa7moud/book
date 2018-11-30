<?php
 include ("DB.php");
$q="CREATE TABLE IF NOT EXISTS books (
id int(11) NOT NULL AUTO_INCREMENT,
type varchar(50) NOT NULL,
name varchar(50) NOT NULL,
author varchar(50) NOT NULL,
PRIMARY KEY (`id`)
 );";
 $db->myExec($q);

?>

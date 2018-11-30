<?php

 $pd=new PDO("mysql:host=localhost","root","");
   $q="create database nn;";

   $pd->exec($q);

?>

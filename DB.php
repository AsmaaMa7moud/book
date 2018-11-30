<?php

class database{
private $pd=null;
public function __construct($name)
{
$this->pd=new PDO("mysql:host=localhost;dbname=$name","root","");
}
public function myExec($q)
{
$this->pd->exec($q);
}
public function getrows($q,$arg)
{
$stm=$this->pd->prepare($q);
$stm->execute($arg);
return $stm->fetchAll();
}
public function getrow($q,$arg)
{
$stm=$this->pd->prepare($q);
$stm->execute($arg);
return $stm->fetch();
}
public function quaryop($q,$arg)
{
$stm=$this->pd->prepare($q,$arg);
$stm->execute($stm);
}
}
$db=new database("nn");




?>

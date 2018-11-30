<?php

include ("DB.php");
$q="INSERT INTO books(Id,type,Name,author)VALUES
(1,'economic','Forbes','Mohamed Ali'),
(2,'economic','Financial ethics','Abdallah Ahmed'),
(3,'Literary criticism','The art of the novel','Mona Adel'),
(4,'Literary criticism','Narrative Conversations','Eman Mohamed',),
(5,'Literary criticism','Lost spirits','Amal Mohamed',),
(6,'economic','the new Economie','Ahmed Ali'),

(7,'Animal Science','The Fox','Marten waln'),
(8,'Animal Science','The Falcon','Helen Macdonal'),
(9,'Animal Science','peacock','Christine Jackson'),
(10,'children','grape vine','Kamel Kelany'),
(11,'children','Smart Rabbit','Kamel Kelany'),
(12,'children','in the stable','Kamel Kelany'),


(13,'Astronomy','Antimatter','Ghapreel'),
(14,'Astronomy','Galaxies','John Jerebeen'),
(15,'Astronomy','The elegant universe','Brian Green'),
(16,'Teaching languages','English stories and phrases','Fahb Awad'),
(17,'Teaching languages','Speak colloquial English''Fahd Awad'),
(18,'Teaching languages','Family English words','Fahd Awad')";
$db->myExec($q);

?>

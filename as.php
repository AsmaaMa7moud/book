<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
 <link href="styl.css" rel="stylesheet">
  <meta charset="utf-8">
</head>

<body>
<div class="header"> Find a Book </div>
<br><br>
<?php

include("DB.php");

 if(isset($_POST['submit']))
 {


  
  $type=$_POST['spec'];
  $sel="SELECT * FROM books where type=?;";
   $rows=$db->getRows($sel,array($type));

                if(count($rows)>0)
                {
                   echo "<table border=2>";

                  echo "<tr><th> Exist Books</th></tr>";
                  echo "</table>";
                  echo "<br><br>";
                  echo "<table border=2>" ;
                   foreach($rows as $row)
                   {

                     echo "<tr><td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td>  <td>$row[3]</td> ";


                   }
                   echo "</table>";
                }

                 else{
                    echo "<div class=h> No books </div>";
                 }
    }

?>
</body>

</html>

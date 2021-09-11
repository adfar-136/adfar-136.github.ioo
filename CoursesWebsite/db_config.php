<?php
$servername='localhost';
$username='dbuser1';
$password='!1Idrees';
$dbname = "course_website";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());

}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/stdview_view.css">
</head>	


<?php
//this is for notification arrived

session_start();
include_once "includes/dbh.inc.php";

$sessionUsn=$_SESSION['usn'];
//if(isset($_POST["std"])){
    


echo "<body>
    <h1>fill up the form</h1>
    <div>
    <form action=\"includes/notification2.inc.php\" method=\"post\" enctype=\"multipart/form-data\">
    Select image to upload:
    <br><br>
    
    <input type=\"file\" name=\"file\">
    <br><br>
   
    <input type=\"submit\" value=\"Upload Image\" name=\"submit\">
  </form>
    </div>
    
</body>";  
//}

//<input type=\"text\" name=\"name\" placeholder=\"name\"><br>
//<input type=\"file\" name=\"file[1]\" value=\"photo2\"><br><br>
?> 


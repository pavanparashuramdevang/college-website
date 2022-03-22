
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/stdview_view.css">
</head>	

<?php

session_start();
include_once 'dbh.inc.php';

$sessionUsn=$_SESSION["usn"];

$result = mysqli_query($conn,"SELECT * FROM stddata where usn='$sessionUsn'");


if (mysqli_num_rows($result) > 0) {


while($row = mysqli_fetch_array($result)) {
    echo "<body>";

    echo "<h1> usn :".$row["usn"];
    echo "<br><br>";
    echo "<h1> name :".$row["name"];
    echo "<br><br>";
    echo "<h1> branch :".$row["branch"];
    echo "<br><br>";
    //echo "<h1> adhar".$row["adhar"];
    //echo "<h1> pan".$row["pan"];


    
    $file_path0=$row["adhar"];
    $file_path1=$row["pan"];
    echo "adhar photo";
    echo "<br>";

    echo "<img src=\"$file_path0\" alt=\"error\" class=\"thumbnail\" width=\"100\" hight=\"100\" />"; 
    echo "<br><br>";
    echo "pan photo";
    echo "<br>";
    echo "<img src=\"$file_path1\" alt=\"error\" class=\"thumbnail\" width=\"100\" hight=\"100\">"; 



    
    
    echo "</body>";
    echo "</html>";
    
    

   

    
}
}
    
    
    

?>
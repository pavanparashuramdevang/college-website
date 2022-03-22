
<?php
session_start();

include_once "dbh.inc.php";
$sessionUsn=$_SESSION["usn"];



 $sql1="UPDATE verify SET checkbox='1' WHERE usn=$sessionUsn;";
        $result=mysqli_query($conn,$sql1);
        echo " the student is verified";
        echo "<br>";
        echo " <a href=\"../main.php\">return to home </a> ";

?>
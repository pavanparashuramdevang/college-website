<?php
session_start();
    include_once "dbh.inc.php";
if(isset($_POST["submit"])){
    if(isset($_POST["checkbox"])){
        $usn=$_SESSION['usn'];
        $sql="INSERT INTO verify(usn,checkbox) VALUES('$usn',false)";
        $result=mysqli_query($conn,$sql);
        echo "student verified";

    }
    

    
    
    else{
        
        header('Location: searchstd.inc.php');
    }
}


else {
    header("location: ../main.php");
}
?>
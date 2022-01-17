<?php
$adminName="admin";
$adminPassword="password";
include_once "dbh.inc.php";
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    if($name==$adminName&&$pwd==$adminPassword){
        header('Location: ../adminview.php');

    }
    else{
        header('Location: ../adminlogin.php');
        
    }
}


else {
    header("location: ../main.php");
}
?>
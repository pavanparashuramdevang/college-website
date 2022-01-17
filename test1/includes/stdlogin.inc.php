<?php
session_start();
    include_once "dbh.inc.php";
if(isset($_POST["submit"])){
    $usn = $_POST["usn"];
    $_SESSION["usn"]=$usn;
    $pwd = $_POST["pwd"];
    $sql="SELECT usn FROM users WHERE usn='$usn' AND password='$pwd'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        
        header('Location: ../stdview.php');
    }
    else{
        
        header('Location: ../stdlogin.php');
    }
}


else {
    header("location: ../main.php");
}
?>
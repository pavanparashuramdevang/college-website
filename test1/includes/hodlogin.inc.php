<?php
session_start();
    include_once "dbh.inc.php";
if(isset($_POST["submit"])){
    $faculty_id = $_POST["faculty_id"];
    $_SESSION["faculty_id"]=$faculty_id;
    $pwd = $_POST["pwd"];
    $sql="SELECT faculty_id FROM faculty WHERE faculty_id='$faculty_id' AND password='$pwd'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        
        header('Location: ../hodview.php');
    }
    else{
        
        header('Location: ../hodlogin.php');
    }
}


else {
    header("location: ../main.php");
}
?>
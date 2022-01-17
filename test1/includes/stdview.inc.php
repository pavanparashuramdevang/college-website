<?php
session_start();
    include_once "dbh.inc.php";

  if(isset($_POST["submit"])){
    $sessionUsn=$_SESSION["usn"];
    $name = $_POST["name"];
    $branch=$_POST["branch"];
    $adhar=$_post["adhar"];
    $pan=$_pOST["pan"];
    $sql="SELECT usn FROM stdData where usn='$sessionUsn'";
    $resultCheck=mysqli_query($conn,$sql);
    if(mysqli_num_rows($resultCheck)==0){

    $sql="INSERT INTO stdData (usn,name,branch,adhar,pan)VALUES('$sessionUsn','$name','$branch','$adhar','$pan')";
    $result=mysqli_query($conn,$sql);

    header('Location: ../stdview.php');
    }
    else{
        echo "usn already exists";
    }
    
}


else {
    echo "submit error";
   //header("location: ../main.php");
}



?>
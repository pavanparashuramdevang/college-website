<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/stdview_view.css">
</head>	
<?php
    include_once "dbh.inc.php";
if(isset($_POST["submit"])){
    $usn = $_POST["usn"];
    $pwd = $_POST["pwd"];
    $sql="SELECT usn FROM users where usn='$usn'";
    $resultCheck=mysqli_query($conn,$sql);
    if(mysqli_num_rows($resultCheck)==0){

    $sql="INSERT INTO users (usn,password)VALUES('$usn','$pwd')";
    $result=mysqli_query($conn,$sql);


    //inserting a value to the verify table
    $sql1="INSERT INTO verify (usn,checkbox) VALUES('$usn','0');";
    $result1=mysqli_query($conn,$sql1);

    //inserting values to dataupdate table
    $sql2="INSERT INTO dataupdate (usn,flag) VALUES ('$usn',0);";
    $result2=mysqli_query($conn,$sql2);

    header('Location: ../adminview.php');
    }
    else{
        echo "usn already exists";
        echo "<br>";
        echo "<a href=\"../main.php\">return to main page</a>";
    }
}
    

else {
    header("location: ../main.php");
}
?>
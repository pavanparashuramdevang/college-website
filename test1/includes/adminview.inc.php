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

    header('Location: ../adminview.php');
    }
    else{
        echo "usn already exists";
    }
}
    

else {
    header("location: ../main.php");
}
?>
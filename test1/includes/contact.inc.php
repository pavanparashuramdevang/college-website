<?php

include_once "dbh.inc.php";
if (isset($_POST['submit'])){
    $name=$_POST["name"];
    $mailFrom=$_POST["mail"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $sql="INSERT INTO contact (name,mailFrom,message) VALUES ('$name','$mailFrom','$message');";
    $result=mysqli_query($conn,$sql);

    header("Location: ../main.php?thank you for contacting");

}
else {
    header("location: ../main.php");
}
?>
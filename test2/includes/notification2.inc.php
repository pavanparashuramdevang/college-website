<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/stdview_view.css">
</head>	


<?php
session_start();
    include_once "dbh.inc.php";

  if(isset($_POST["submit"])){
    $sessionUsn=$_SESSION["usn"];



    $file= $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $filetmpname = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileerror = $_FILES['file']['error'];
    $filetype = $_FILES['file']['type'];

    
    $fileExt=explode('.',$filename);
    $fileActualExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png','pdf');
    
    if(in_array($fileActualExt,$allowed)) {
        if($fileerror===0){
            if($filesize <500000000)  {

                $filenamenew=uniqid('',true).'.'.$fileActualExt;
                $filedestination='uploads/'.$filenamenew;
                move_uploaded_file($filetmpname,$filedestination);
                //      $sql3="INSERT INTO stddata(usn,name,branch,adhar) VALUES ('$sessionUsn','$name','$branch','$filedestination');";
                //$result3=mysqli_query($conn,$sql3);
                $sql1='SELECT c_name FROM counting ;';
 $result1=mysqli_query($conn,$sql1);
    

 //just trying
 if(mysqli_num_rows($result1)>0){
 while ($row=mysqli_fetch_assoc($result1)){
     
    $c_name=$row['c_name'];


 }
}










$sql3="INSERT INTO $c_name VALUES ('$sessionUsn','$filedestination','image2');";
$result3=mysqli_query($conn,$sql3);

                echo "your response collected successfully";
               // header("Location: index.php?uploadsuccess");


            }
            else {
                echo 'your file is too big';
            }

        }
        else{
            echo 'there was an error uploading the file';
        }

    }
    else {
        echo 'you cannot upload this type file';
    }
}









    ?>
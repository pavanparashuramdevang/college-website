<?php
    include_once "dbh.inc.php";
if(isset($_POST["submit1"])){
    $faculty_id = $_POST["faculty_id"];
    $pwd = $_POST["pwd"];
    $sql="SELECT faculty_id FROM faculty where faculty_id='$faculty_id'";
    $resultCheck=mysqli_query($conn,$sql);
    if(mysqli_num_rows($resultCheck)==0){

    $sql1="INSERT INTO faculty (faculty_id,password)VALUES('$faculty_id','$pwd')";
    $result=mysqli_query($conn,$sql1);

    header('Location: ../adminview.php');
    }
    else{
        echo "usn already exists";
    }
}
    

else {
    echo "errror";
    //header("location: ../main.php");
}
?>
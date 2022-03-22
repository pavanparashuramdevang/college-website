<?php
session_start();
    include_once "dbh.inc.php";
if(isset($_POST["submit"])){
    $usn = $_POST["usn"];
    $_SESSION["usn"]=$usn;
    $pwd = $_POST["pwd"];

    $sql1="SELECT flag FROM users WHERE usn='$usn';";
    $result1=mysqli_query($conn,$sql1);

    $row1=mysqli_fetch_array($result1);
    // echo "<h1>".$row1['checkbox']."</h1>";
     $int_row=(int) $row1['flag'];
     $count=$int_row;



    $sql="SELECT usn FROM users WHERE usn='$usn' AND password='$pwd'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){

     


      


     if ($count==0 ){
         echo "may be working";
         $sql2="UPDATE users SET flag=1 WHERE usn='$usn';";
         $result2=mysqli_query($conn,$sql2);
         
         header('Location: ../stdlogin1.php?update password');

     }



     else if($count==2 ){
    $sql="SELECT usn FROM users WHERE usn='$usn' AND password='$pwd'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        
        header('Location: ../stdview.php');
    }
    else{
        
        header('Location: ../stdlogin.php');
    }
    


}

else{
    
    header('Location: ../stdlogin.php?please login with correct login and password');
    
}
}
else{
    header('Location: ../stdlogin.php?please login with correct login and password ');
}
}



else {
    header("location: ../main.php");
}

?>
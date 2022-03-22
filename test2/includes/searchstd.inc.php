<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/stdview_view.css">
</head>	


<?php
session_start();
    include_once "dbh.inc.php";

  if(isset($_POST["search"])){
    $usn=$_POST['usn'];
    $_SESSION['usn']=$usn;

    $sql="SELECT usn,name,branch,adhar,pan FROM stddata where usn='$usn'";
    $resultCheck=mysqli_query($conn,$sql);
    if(mysqli_num_rows($resultCheck)==0){

    echo "no user by that usn";

    header('Location: ../hodview.php?no user by that usn');
    }
    else{
        $sql1="SELECT checkbox FROM verify WHERE usn='$usn';";
        $result=mysqli_query($conn,$sql1);

        //just trying
        $row1=mysqli_fetch_array($result);
       // echo "<h1>".$row1['checkbox']."</h1>";
        $int_row=(int) $row1['checkbox'];
        //converting to integer to check equality
       // echo "<h1>".$int_row."</h1>";
        
        if($int_row!=1){
        
        while($row= mysqli_fetch_array($resultCheck)){
            

            echo "<h1>student record<h1>";

            echo "<h1> usn :".$row["usn"];
    echo "<br><br>";
    echo "<h1> name :".$row["name"];
    echo "<br><br>";
    echo "<h1> branch :".$row["branch"];
    echo "<br><br>";
            



            
    $file_path0=$row["adhar"];
    $file_path1=$row["pan"];
    echo "adhar photo";
    echo "<br>";

    echo "<img src=\"$file_path0\" alt=\"error\" class=\"thumbnail\" width=\"100\" hight=\"100\" />"; 
    echo "<br><br>";
    echo "pan photo";
    echo "<br>";
    echo "<img src=\"$file_path1\" alt=\"error\" class=\"thumbnail\" width=\"100\" hight=\"100\">"; 
        
        
        }
        echo "<h2> please click on check box and submit to verify the user </h2>";
       print(" <form action=\"searchdb.inc.php\" method=\"post\">
        <input type=\"checkbox\" name=\"checkbox\" required>
        <input type=\"submit\" name=\"submit\" placeholder=\"verify\">
        </form>");
    }
        else{
            print "<h2>the student already verified</h2>";

        while($row= mysqli_fetch_array($resultCheck)){
            echo "<h1>student record<h1>";

            echo "<h1> usn :".$row["usn"];
    echo "<br><br>";
    echo "<h1> name :".$row["name"];
    echo "<br><br>";
    echo "<h1> branch :".$row["branch"];
    echo "<br><br>";
            



            
    $file_path0=$row["adhar"];
    $file_path1=$row["pan"];
    echo "adhar photo";
    echo "<br>";

    echo "<img src=\"$file_path0\" alt=\"error\" class=\"thumbnail\" width=\"100\" hight=\"100\" />"; 
    echo "<br><br>";
    echo "pan photo";
    echo "<br>";
    echo "<img src=\"$file_path1\" alt=\"error\" class=\"thumbnail\" width=\"100\" hight=\"100\">"; 
        
            

         
         


    }
       
    }
    
}
}


/*else {
    echo "submit error";
   //header("location: ../main.php");
}*/



?>
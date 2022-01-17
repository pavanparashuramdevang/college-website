<?php
session_start();
    include_once "dbh.inc.php";

  if(isset($_POST["search"])){
    $usn=$_POST['usn'];
    $_SESSION['usn']=$usn;

    $sql="SELECT usn,name,branch,adhar,pan FROM stdData where usn='$usn'";
    $resultCheck=mysqli_query($conn,$sql);
    if(mysqli_num_rows($resultCheck)==0){

    echo "no user by that usn";

    header('Location: ../hodview.php');
    }
    else{
        $sql1="SELECT checkbox FROM verify WHERE usn='$usn';";
        $result=mysqli_query($conn,$sql1);
        if($result=='0'){
        
        while($row= mysqli_fetch_array($resultCheck)){
            echo  "<h1>" .$row['usn']."</h1>";
            echo  "<h1>" .$row['name']."</h1>";
            echo  "<h1>" .$row['branch']."</h1>";
            echo  "<h1>" .$row['adhar']."</h1>";
            echo  "<h1>" .$row['pan']."</h1>";

            echo "<h1><img src='".$row['adhar']."alt='its adhar img'/>";
        
        
        }
        echo "<h2> please click on check box and submit to verify the user </h2>";
       print(" <form action=\"searchdb.inc.php\" method=\"post\">
        <input type=\"checkbox\" name=\"checkbox\" >
        <input type=\"submit\" name=\"submit\" placeholder=\"verify\">
        </form>");
    }
        else{
            print "<h2>the student already verified</h2>";

        while($row= mysqli_fetch_array($resultCheck)){
            echo  "<h1>" .$row['usn']."</h1>";
            echo  "<h1>" .$row['name']."</h1>";
            echo  "<h1>" .$row['branch']."</h1>";
            echo  "<h1>" .$row['adhar']."</h1>";
            echo  "<h1>" .$row['pan']."</h1>";

            

         
         


    }
       
    }
    
}
}


/*else {
    echo "submit error";
   //header("location: ../main.php");
}*/



?>
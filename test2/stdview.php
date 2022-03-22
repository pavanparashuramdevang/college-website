<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/stdview_view.css">
</head>	



<?php
session_start();

include_once "includes/dbh.inc.php";
$sessionUsn=$_SESSION["usn"];

    $c_value=0;

    $sql1='SELECT c_val FROM counting ;';
     $result1=mysqli_query($conn,$sql1);
        

     //just trying
     if(mysqli_num_rows($result1)>0){
     while ($row=mysqli_fetch_assoc($result1)){
         
        $c_value=$row['c_val'];


     }
    }

    else{echo 'notworking';}
    // echo "<h1>".$row1['checkbox']."</h1>";
    // $int_row=(int) $row1['c_val'];
    // $count=$int_row;
    // echo $row['c_val'];
    // echo $c_value;
     $count=$c_value;

     

     


     if($count==0){

        
        //echo "<h1>".$count."<h1>";
        echo "<h1><br> no notification </h1>";
        echo "<a href = \"main.php\"> return to main page</a>";
       echo "<br>";
        

     }
     else if($count==2){

        //echo "<h1>".$count."<h1>";
        echo "<h1>notification arrived</h1>";
        echo "<form action=\"rough.php\" method=\"'post'\"><input type=\"submit\" name=\"std\" value=\"view notification\"></form> <br>";

         
     }
     else{
      echo "<h1>notification arrived</h1>";
      echo "<form action=\"rough3.php\" method=\"'post'\"><input type=\"submit\" name=\"std\" value=\"view notification\"></form><br>";

     }




     $sql1="SELECT checkbox FROM verify WHERE usn=$sessionUsn;";
        $result=mysqli_query($conn,$sql1);

        //just trying
        $row1=mysqli_fetch_array($result);
       // echo "<h1>".$row1['checkbox']."</h1>";
        $int_row=(int) $row1['checkbox'];
        //converting to integer to check equality
       // echo "<h1>".$int_row."</h1>";

       $sql2="SELECT flag FROM dataupdate WHERE usn=$sessionUsn;";
        $result2=mysqli_query($conn,$sql2);

        //just trying
        $row2=mysqli_fetch_array($result2);
       // echo "<h1>".$row1['checkbox']."</h1>";
        $int_row2=(int) $row2['flag'];
        
        if($int_row!=1 && $int_row2==0){
           // echo 'may be working';
            //echo "<h1>".$int_row2."</h1>";
            
            echo  "<form action=\"includes/stdview.inc.php\" method=\"post\" enctype=\"multipart/form-data\">
            <h1>Select image to upload:</h1>
            
            <input type=\"text\" name=\"name\" placeholder=\"full name\"><br>
            <input type=\"text\" name=\"branch\" placeholder=\"branch\"><br><br>
            <input type=\"file\" name=\"file\">
            <br><br>
            <input type=\"file\" name=\"file1\">
            <br><br>
            <input type=\"submit\" value=\"Upload Image\" name=\"submit\">
            <br>
          </form>";
        }




        elseif($int_row!=1 && $int_row2==1){
            //echo "<h1>".$int_row."</h1>";
            //echo "<h1>".$int_row2."</h1>";
            echo "<br><h1>view and edit the profile</h1><br>";
            echo  "<form action=\"includes/stdview_view.inc.php\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"submit\" value=\"view\" name=\"submit\">
            </form>";



            echo "<h1> update your credentials usn:".$sessionUsn."<h1>";
            echo  "<form action=\"includes/stdview_update.inc.php\" method=\"post\" enctype=\"multipart/form-data\">
            <h1>Select image to  update:</h1>
            <input type=\"text\" name=\"name\" placeholder=\"full name\"><br><br>
            <input type=\"text\" name=\"branch\" placeholder=\"branch\"><br><br>
            <input type=\"file\" name=\"file\"><br><br>
            <input type=\"file\" name=\"file1\"><br><br>
            <input type=\"submit\" value=\"Upload Image\" name=\"submit\"><br>
          </form>";

            
        }
        elseif($int_row==1){
            echo "you can only view because its already verified";
            echo  "<form action=\"includes/stdview_view.inc.php\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"submit\" value=\"view\" name=\"submit\">
            </form>";

        }

        ?>
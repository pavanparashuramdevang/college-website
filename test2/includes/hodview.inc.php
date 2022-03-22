<?php
   include_once "dbh.inc.php";
   session_start();

   if(isset($_POST["submit"])){
     $notification_name=$_POST['notification_name'];
     $name=$_POST['name'];
     $image1=$_POST['image1'];
     $image1_name=$_POST['image1_name'];
     $image2=$_POST['image2'];
     $image2_name=$_POST['image2_name'];

     $_SESSION['notification_name']=$notification_name;
     





     $sql1="SELECT c_val FROM counting WHERE c_id=1;";
     $result=mysqli_query($conn,$sql1);

     //just trying
     $row1=mysqli_fetch_array($result);
    // echo "<h1>".$row1['checkbox']."</h1>";
     $int_row=(int) $row1['c_val'];
     $count=$int_row;

     
     //converting to integer to check equality
    // echo "<h1>".$int_row."</h1>";
     
     //if($int_row!=1){
     
    // while($row= mysqli_fetch_array($resultCheck)){
     //    echo  "<h1>" .$row['usn']."</h1>";

       





     if(isset($image1)){ 
         if(isset($image2)){
             echo "both are checked";
             if($count==0){
             $sql="CREATE TABLE $notification_name ($name VARCHAR(255),$image1_name varchar(255),$image2_name varchar(255));";
             $result2=mysqli_query($conn,$sql);
             

             $sql2="UPDATE counting SET c_val = 1,c_name='$notification_name' WHERE c_id='1';";
             $result3=mysqli_query($conn,$sql2);

             echo "query successful";
             }
             else{
                 echo "please drop the notificaton";
             }
         }
         else{
             echo "one is checked";
             if($count==0){
             $sql="CREATE TABLE $notification_name ($name VARCHAR(255),$image1_name varchar(255));";
             $result2=mysqli_query($conn,$sql);
             

             $sql2="UPDATE counting SET c_val = 2,c_name='$notification_name' WHERE c_id=1;";
             $result3=mysqli_query($conn,$sql2);

             echo "query successfull";
             }
         }
        }
    
        else{
            echo "choose first image ie image1";
        }
    }
    
    
     
 
     //$sql="CREATE TABLE $notification_name ($name VARCHAR(50),
     //$resultCheck=mysqli_query($conn,$sql);


     if(isset($_POST["drop"])){

        $sql2="UPDATE counting SET c_val=0 WHERE c_id=1;";
        $result3=mysqli_query($conn,$sql2);
        echo "the notification is droped";
     }

/*
     if(isset($_POST["std"])){
         echo "<h1>hii</h1>";



  */      
/*

echo "<body>
    <h1>fill up the form</h1>
    <div>
        <form action=\"includes/stdview.inc.php\" method=\"post\">
           
            <input type=\"text\" name=\"name\" placeholder=\"full name\"><br>
            
            
            <label for=\"photo1\"> photo1</label><br>
            <input type=\"file\" name=\"photo1\" placeholder=\"photo 1\"><br>
            <label for=\"photo2\">photo2</label><br>
            <input type=\"file\" name=\"photo2\" value=\"photo2\"><br><br>
            <button type=\"submit\" name=\"submit3\">submit</button>
        </form>
    </div>
    
</body>";

*/


    // }

?>
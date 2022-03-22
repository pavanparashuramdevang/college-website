<?php
session_start();
    include_once "dbh.inc.php";

  if(isset($_POST["submit"])){
    $sessionUsn=$_SESSION["usn"];
    $name = $_POST["name"];
    $branch=$_POST["branch"];
    

    //$sql2="INSERT INTO stddata(usn,name,branch) VALUES ('$sessionUsn','$name','$branch');";
   // $result2=mysqli_query($conn,$sql2);

    $sql1="UPDATE dataupdate SET flag=1 WHERE usn='$sessionUsn';";
    $result1=mysqli_query($conn,$sql1);

/*i really dont know what is the use of it but just trying new things

    $sql="SELECT usn FROM stddata where usn='$sessionUsn'";
    $resultCheck=mysqli_query($conn,$sql);
    if(mysqli_num_rows($resultCheck)==0){

    $sql="INSERT INTO stdData (usn,name,branch,adhar,pan)VALUES('$sessionUsn','$name','$branch','$adhar','$pan')";
    $result=mysqli_query($conn,$sql);

    //inserting a value to the verify table
    //actually inserted in adminview.inc.php
   // $sql1="INSERT INTO verify (usn,checkbox) VALUES('$sessionUsn','0');";
   // $result1=mysqli_query($conn,$sql1);
   */


   //inserting images

  
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

                echo "file upload successfull";
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




    //uploading second file

    
        $file1= $_FILES['file1'];
        $filename1 = $_FILES['file1']['name'];
        $filetmpname1 = $_FILES['file1']['tmp_name'];
        $filesize1 = $_FILES['file1']['size'];
        $fileerror1 = $_FILES['file1']['error'];
        $filetype1 = $_FILES['file1']['type'];
    
        
        $fileExt1=explode('.',$filename1);
        $fileActualExt1=strtolower(end($fileExt1));
    
        $allowed1=array('jpg','jpeg','png','pdf');
        
        if(in_array($fileActualExt1,$allowed1)) {
            if($fileerror1===0){
                if($filesize1 <5000000)  {
    
                    $filenamenew1=uniqid('',true).'.'.$fileActualExt1;
                    $filedestination1='uploads/'.$filenamenew1;
                    move_uploaded_file($filetmpname1,$filedestination1);
                    //$sql4="INSERT INTO stddata(pan) VALUES ('$filedestination1') WHERE usn='$sessionUsn';";
                    //$result4=mysqli_query($conn,$sql4);
                    echo "file two upload successfull";

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


        //$sql3="INSERT INTO stddata(usn,name,branch,adhar,pan) VALUES ('$sessionUsn','$name','$branch','$filedestination','$filedestination1');";
       $sql3="UPDATE stddata SET usn='$sessionUsn', name='$name', branch='$branch', adhar='$filedestination', pan='$filedestination1' WHERE usn='$sessionUsn';";
        $result3=mysqli_query($conn,$sql3);


        
        header("Location: ../stdview.php?update may may be success $sessionUsn");
    
    












   // header('Location: ../stdview.php?image inserting first time');
    //}
  //  else{
  //      echo "usn already exists";
  //  }
    
}


else {
    echo "submit error";
   //header("location: ../main.php");
}



?>
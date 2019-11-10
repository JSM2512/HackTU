<?php
  include_once("do-connect.php");

  $name=$_POST["name"];
  $email=$_POST["email"];
$fname=$_POST["fname"];
//  $firm=$_POST["firm"];
  $mob=$_POST["mob"];
  $add=$_POST["add"];
  $fmob=$_POST["fmob"];
$roll=$_POST["roll"];
//$offadd=$_POST["offadd"];
$pin=$_POST["pin"];
  $state=$_POST["state"];
  $city=$_POST["city"];
//$res=$_POST["res"];
  $btn=$_POST["btn"];
 $brnh=$_POST["brnh"];

  if($btn=="Save")
  {
       if($_FILES["res"]["name"]=="")
       {
           $pic1="no-img.jpg";
       }
      else
      {
       $pic1=$_FILES["res"]["name"];
        $temp1=$_FILES["res"]["tmp_name"];
        move_uploaded_file($temp1,"imgs/".$pic1); 
      }
      
  
      
      
      
 $query="insert into profile
values('$name','$fname','$email','$mob','$fmob','$roll','$brnh','$add','$pin','$state','$city','$pic1')";
     
    mysqli_query($dbref,$query);
   // $msg=mysqli_error($dbref);

//       echo "record saved";
        // $msg;
      // header("location:result.php?msg=Record Saved...!");
         
   }

   
?>

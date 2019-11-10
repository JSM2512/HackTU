<?php
  include_once("do-connect.php");

  $name=$_POST["name"];
  $email=$_POST["eml"];
$about=$_POST["abt"];
//  $firm=$_POST["firm"];
  $estd=$_POST["estd"];
  $add=$_POST["add"];
  $offno=$_POST["offno"];
//$offadd=$_POST["offadd"];
$pin=$_POST["pin"];
  $state=$_POST["state"];
  $city=$_POST["city"];
$req=$_POST["req"];
  $btn=$_POST["btn"];

  if($btn=="Save")
  {
       if($_FILES["img1"]["name"]=="")
       {
           $pic1="no-img.jpg";
       }
      else
      {
       $pic1=$_FILES["img1"]["name"];
        $temp1=$_FILES["img1"]["tmp_name"];
        move_uploaded_file($temp1,"imgs/".$pic1); 
      }
      
  
      
      
      
 $query="insert into company
values('$name','$email','$about','$estd','$add','$pin','$offno','$state','$city','$req','$pic1')";
     
    mysqli_query($dbref,$query);
   // $msg=mysqli_error($dbref);

//       echo "record saved";
        // $msg;
      // header("location:result.php?msg=Record Saved...!");
         
   }

   
?>

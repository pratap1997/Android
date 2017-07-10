<?php
$conn=mysqli_connect("localhost","root","root","cliffesto")
 or die('Unable to Connect');
 $name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $college=$_POST["college"];
 $gender=$_POST["gender"];
 $id=0;
  $sql = "INSERT INTO cliffesto_table VALUES('$id','$name','$email','$phone','$college','$gender')";
  $res=mysqli_query($conn,$sql);
  if($res)
  {
    //echo"INSERTED";
  }
  else
  {
    //echo"Not INserted";
  }
mysqli_close($conn);
?>
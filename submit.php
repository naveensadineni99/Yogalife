<?php
$Email = $_REQUEST['email'];
$Password = $_REQUEST['Password'];
$RPassword = $_REQUEST['RPassword'];





$con = mysqli_connect("localhost","root","","signup");
// Check connection
 $query = "INSERT into `login` (Email, Password, RPassword)
VALUES ('$Email', '$Password', '$RPassword')";

$result = mysqli_query($con,$query);
 
        if($result)
        {
     
          echo "success";

         }
         else 
         {
         	echo "failed";
         }
         




?>
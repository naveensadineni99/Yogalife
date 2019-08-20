<<<<<<< HEAD
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
         




=======
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
         




>>>>>>> ad065d0bdd91db0db7293946d18eed3ae4c3f5bc
?>
<?php


	$username = htmlspecialchars($_POST['uname']);
    $password = htmlspecialchars($_POST['password']);
    
    // echo $username;
    // echo $password;
 
    $user = 'root';
    $pass = '';
    $db = 'signup';
    $con = new mysqli('localhost', $user, $pass,$db) or die("unable to connect");
    
    $query = "select * from login where username='$username' and password= '$password'";

$result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     
           echo "success";
           header("Location: Homepage.html");
    
         }

else{
    
    //header("Location: signup.html");
    echo "Failed to Login. Please sign Up before logging in.";
}

    ?>

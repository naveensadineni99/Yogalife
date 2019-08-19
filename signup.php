<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #999999;
  padding-top: 50px;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 35px;
  font-weight: bold;
  color: #FFFF00;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
<<<<<<< HEAD

</style>

<head>
    <link rel="stylesheet" type="text/css" href="yoga.css">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title>Path to Yoga life</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    
<body>
    <div id="wrapper">
    <header>
    <h1>Path to Yoga life</h1>
    </header>
    <nav>
        <ul>
        </ul>
    </nav>

<main>
      <img class ="floatleft" src="yogadoor2.jpg" alt="this is a door" height="250" width="225" >
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>  
    <p><span class="studio">Path to yoga life</span> provides all levels of yoga practice in a tranquil, peaceful environment. Whether you are new to yoga or an experienced practitioner, our dedicated instructors can develop a practice to meet your needs. Let your inner light shine at the <span class="studio">Path of Light Yoga Studio</span>.</p>
    <ul>
        <li>Hatha, Vinyasa, and Restorative Yoga classes</li>
        <li>Drop-ins welcome</li>
        <li>Mats, blocks, and blankets provided</li>
        <li>Relax in our Serenity Lounge before or after your class</li>
    </ul>
        <div class="clear"><span class="studio">Path to yoga life</span><br>3895 Linton avenue<br>Montreal, CA H3S1T3<br><a id="mobile" href="tel :514-793-9955">514-793-9955</a><br><span id="desktop">888-555-5555</span></div>
        <br>
        &nbsp;


    </main>
    <footer>
        <small><i>Copyright &copy; 2019 Path of Light Yoga</i></small><br>
        <a href="mailto:pathtoyogalife@gmail.com">pathtoyogalife@gmail.com</a>
        </footer>
    </div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
  <form method ="POST" action ="submit.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit"  class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
   }
}
</script>
</html>

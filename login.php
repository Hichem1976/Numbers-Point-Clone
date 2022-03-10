<?php

session_start();


?>




<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    


<script src="validation.js"></script>
<link href="mystyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="signin.css" rel="stylesheet">






<body class="text-center">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataPhone";

$msgError="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	$mobile= $_POST['mobile'];
    $pass=$_POST['password'];

    $sql = "SELECT mobile, password FROM user WHERE mobile=".strval($mobile)."AND password=".$pass;

    $result = $conn->query($sql);
    if (Count($result)==1){
        $_SESSION['mobile']=$mobile;
        $_SESSION['password']=$password;
        header("Location:store.php");
    }else{
        $msgError="Invalid mobile or password";
    }


	
}

?>









<form class="form-signin" method="post">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Mobile number</label>
      <input type="mobile" name="mobile" id="inputMobile" class="form-control" placeholder="Mobile number" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <span id="error" style="color: red"><?php echo $msgError;?></span>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button onclick="return validateLogin()" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">If you don't have an existing account then <a href="signup.php">create a new account</a></p>
    </form>


<?php
    
$conn->close();

?>









</body>
</html>











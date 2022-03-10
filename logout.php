<?php

session_start();
unset($_SESSION['mobile']);
unset($_SESSION['password']);

session_destroy();
header("Location:store.php");




//effacer la liste avant achat de valeur $_SESSION['key']




?>
<?php

session_start();
session_destroy();

setcookie('username' , $username, time()-1);
setcookie('password' , $password, time()-1);
echo "you are successfully logout. click here to <a href='login.php'>login</a>";
?>
<?php

print_r($_REQUEST);

if(($_REQUEST['username']=='admin' && $_REQUEST['password'] == 'abcd' ) || ($_REQUEST['username'] == "student" && $_REQUEST['password'] == 'abcd')){

    session_start();
    $_SESSION['username'] = $_REQUEST['username'];
    header("Location: index.php");
    
}

else{
    header("Location: login-form.php?msg= Username or Password is incorrect");
}


?>
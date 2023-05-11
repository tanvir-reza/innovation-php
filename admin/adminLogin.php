<?php 

require_once('../config/db.php');



if(isset($_REQUEST['admin_login'])){
    $admin_email = $_REQUEST['admin_email'];
    $admin_password = $_REQUEST['admin_password'];
    
    $auth = md5(sha1($admin_email.$admin_password));

    $sql = "SELECT * FROM admin_inno WHERE admin_email = '$admin_email' AND admin_password = '$admin_password' AND auth_tocken = '$auth'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if($count == 1){
        session_start();
        setcookie('Current_User', $auth, time() + (86400 * 30));
        header('location: ./index.php');
    }else{
        header('location: ./auth.php?error="Invalid Email or Password"');
    }
}
if(isset($_GET['logout'])){
    session_start();
    session_destroy();
    setcookie('Current_User', $auth, time() - (86400 * 30));
    header('location: ./auth.php');
}
